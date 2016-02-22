<?php

namespace Siges\ControlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{


	public function indexAction()
	    {	
	    	if(isset($_REQUEST['error'])){
	    		return $this->render('SigesControlBundle:Default:index.html.twig', array('error'=>1));
	    	}
	        return $this->render('SigesControlBundle:Default:index.html.twig', array());
	    }
	 
	    public function loginAction()
	    {
	    	$usuario = $_REQUEST['usuario'];
	    	$contraseña = md5($_REQUEST['pass']);
	    	$em = $this->getDoctrine()->getManager();
	    	$usuarios = $em->getRepository('SigesControlBundle:Usuario')->findOneBy(array('nombreUsuario'=>$usuario,'contrasena'=>$contraseña));
	    
	    	$fecha = date('d-m-Y');
	    	$em2 = $this->getDoctrine()->getEntityManager();
	    	$conexion = $em2->getConnection();
	    	$query = $conexion->prepare("SELECT count(alumno.id) 
	    	as cantidad from alumno 
	    	where fechaIngreso = STR_TO_DATE('$fecha','%d-%m-%Y')" );
	    	$query->execute();
	    	$countAlumnos = $query->fetch();
	    
	    	$dia = $this::diaSemana();

	    	$hoy = $dia['nombre'];
	    	$id = $dia['id'];

	    	

	    	if (count($usuarios)>0){

	    		$sesion = $this->get("session");
	    		$sesion->set("filter",array("usuario"=>$usuarios->getNombreUsuario(),
	    			"apellido"=>$usuarios->getApellido(),
	    			"nombre"=>$usuarios->getNombre(),
	    			"privilegios"=>$usuarios->getPrivilegios()));
	    		
	    		
	
	    		return $this->render('SigesControlBundle:Default:inicio.html.twig', array('datosUsuario'=>$usuarios,'hoy'=>$hoy,'alumnos'=>$countAlumnos));
	    	}
	    	else {
	    		return $this->redirect($this->generateUrl('siges_control_homepage', array('error'=>true)));
	    	}
	    
	    }
	    public function verMateriasAction(){
	    	$dia = $this::diaSemana();

	    	$hoy = $dia['nombre'];
	    	$id = $dia['id'];
	    	
	    
	    	$em = $this->getDoctrine()->getEntityManager();
	    	$conexion = $em->getConnection(); 
	    	
	    	$query = $conexion->prepare("SELECT materia.descripcion as descripcion,
	    			profesor.nombre as nombre,
	    			curso.ano as anio,
	    			curso.turno as turno,
	    			curso.ciclo as ciclo,
	    			horario.desde as desde,
	    			horario.hasta as hasta
	    			FROM materia inner join profesor 
	    			on materia.id_profesor = profesor.id 
	    			inner join materia_dia_hora 
	    			on materia.id = materia_dia_hora.id_materia 
	    			inner join materia_curso
	    			on materia_curso.id_materia = materia.id
	    			inner join curso
	    			on materia_curso.id_curso = curso.id
	    			inner join horario 
	    			on horario.id = materia_dia_hora.id_horario
	    			where materia.id_profesor = profesor.id 
	    			and materia_dia_hora.id_dia = $id");
	    	
	    	$query->execute();
	    	$materias = $query->fetchAll();
	    	return $this->render('SigesControlBundle:Default:ver-materias.html.twig', array('materias'=>$materias,'id'=>$id));
	    }

	    public function filtrar_materiasAction(){
	    	$dia = $this::diaSemana();
	    	
	    	$filtro = $_REQUEST['filtro'];

	    	$hoy = $dia['nombre'];
	    	$id = $dia['id'];
			$em = $this->getDoctrine()->getEntityManager();
			$conexion = $em->getConnection();

			$query = $conexion->prepare("SELECT materia.descripcion as descripcion,
	    			profesor.nombre as nombre,
	    			curso.ano as anio,
	    			curso.turno as turno,
	    			curso.ciclo as ciclo,
	    			horario.desde as desde,
	    			horario.hasta as hasta
	    			FROM materia inner join profesor 
	    			on materia.id_profesor = profesor.id 
	    			inner join materia_dia_hora 
	    			on materia.id = materia_dia_hora.id_materia 
	    			inner join materia_curso
	    			on materia_curso.id_materia = materia.id
	    			inner join curso
	    			on materia_curso.id_curso = curso.id
	    			inner join horario 
	    			on horario.id = materia_dia_hora.id_horario
	    			where materia.id_profesor = profesor.id 
	    			and materia_dia_hora.id_dia = $id 
	    			and materia.descripcion 
	    			like '%".$filtro."%' 
	    			or profesor.nombre 
	    			like '%".$filtro."%' ");

			$query->execute();
	    	$materias = $query->fetchAll();
	    	return $this->render('SigesControlBundle:Default:ver-materias.html.twig', array('materias'=>$materias,'id'=>$id));

	    }

	    public function agregarClasesAction(){

	    	$em = $this->getDoctrine()->getEntityManager();
	    	$conexion = $em->getConnection();

	    	$materias = $em->getRepository("SigesControlBundle:Materia")->findAll();
	    	$cursos = $em->getRepository("SigesControlBundle:Curso")->findAll();
	    	$horarios = $em->getRepository("SigesControlBundle:Horario")->findAll();
	    	$profesores = $em->getRepository("SigesControlBundle:Profesor")->findAll();







	    	return $this->render('SigesControlBundle:Default:nuevaClase.html.twig',array(
	    		'materias'=>$materias,'cursos'=>$cursos,
	    		'horarios'=>$horarios,'profesores'=>$profesores));
	    }

	  	public function diaSemana()
	  	{
	  		$fecha = date('d-m-Y');
	    
	    	$fechats = strtotime($fecha);

	    	

	    	switch (date('w', $fechats)){
	    		case 0:
	    			$hoy = "Domingo";
	    			$id = 0;
	    			break;
	    		case 1:
	    			$hoy = "Lunes";
	    			$id = 1;
	    			break;
	    		case 2:
	    			$hoy = "Martes";
	    			$id = 2;
	    			break;
	    		case 3:
	    			$hoy = "Miercoles";
	    			$id = 3;
	    			break;
	    		case 4:
	    			$hoy = "Jueves";
	    			$id = 4;
	    			break;
	    		case 5:
	    			$hoy = "Viernes";
	    			$id = 5;
	    			break;
	    		case 6:
	    			$hoy = "Sabado";
	    			$id = 6;
	    			break;
	    	}

	    	$dia = array('nombre'=>$hoy,'id'=>$id);
	    	return $dia;

	  	}
	    


}

