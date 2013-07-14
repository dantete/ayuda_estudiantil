#encoding: utf-8 
namespace :init do
  desc "TODO"
  task :load => :environment do

    Contain.delete_all
    Course.delete_all
    CourseOutline.delete_all
    
############

    malla = CourseOutline.new(:name => "plan 44", :start_date => "10-01-2001")
    malla.save
    malla2 = CourseOutline.new(:name => "plan 100", :start_date => "10-01-2020")
    malla2.save

############ Curso semestre 1 plan malla nueva plan 100

    curso = Course.new(:name => "Introducción a la teoría de sistemas", :description => "Este módulo contribuye al desarrollo de la competencia 
	Integrar conocimientos para la solución de problemas complejos de Ingeniería del Dominio Ciencias de la Computación e Ingeniería y en menor 
	grado a las competencias Administrar Proyectos Informáticos y Diseñar y Construir Sistemas de Software del dominio Ingeniería de Software, 
	ambos dominios del área Formación Disciplinaria, del Plan de Formación de Ingeniería Civil en Computación.")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 1)
    relacion.save
	
	curso = Course.new(:name => "Solución algorítmica de problemas", :description => "Este módulo contribuye al desarrollo de la competencia. 
	Resuelve problemas computacionales algorítmicamente -a nivel básico- que se inserta en el dominio Software y manejo de Información del área
    Formación Disciplinaria, del Plan de Formación de Ingeniería Civil en Computación. ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 1)
    relacion.save	
	relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 1)
    relacion2.save
	
############ cursos 2 semestre

	curso = Course.new(:name => "Programación", :description => "Este módulo contribuye, principalmente, al desarrollo de la competencia resolver problemas
	computacionales Algorítmicamente, del dominio Ciencias de la Computación e Ingeniería; y de manera secundaria, al desarrollo de la competencia diseñar 
	y evaluar el desempeño de algoritmos y estructuras de datos, del mismo dominio, así como de la competencia diseñar y construir sistemas de software 
	del dominio Ingeniería de Software ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 2)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 2)
    relacion2.save
	
############ cursos 3 semestre

	curso = Course.new(:name => "Programación avanzada", :description => "Este módulo contribuye principalmente al desarrollo de las competencias resuelve
	problemas computacionales algorítmicamente y desarrolla Software, y en menor grado, al desarrollo de la competencia analiza requisitos de sistemas de 
	software, que se insertan en el dominio software y manejo de información del área formación disciplinaria, del plan de formación de ingeniería
	civil en computación. ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 3)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 3)
    relacion2.save
	
	curso = Course.new(:name => "Metodologías de desarrollo de software", :description => "Este módulo contribuye directamente al desarrollo de las 
	competencias asociadas al área de Formación Básica y Disciplinaria, particularmente al dominio de Software y Manejo de Información. Específicamente, 
	este módulo entrega al estudiante los conocimientos para ser capaz de: conocer y aplicar metodologías de desarrollo de software; conocer normas y 
	estándares de calidad de software; conocer modelos de mejoramiento integrado para el desarrollo de software. El conocimiento impartido es fundamental 
	para el desarrollo de competencias en dominios posteriores como: Realizar Ingeniería de Requisitos de Sistema de Software; Diseñar Sistemas de Software;
	Desarrollar Software; Desarrollar aplicaciones Web y Distribuidas. De manera transversal se desarrollan las capacidades de análisis, decisión, expresión
	oral y escrita, relación interpersonal, trabajo en equipo, toma de decisiones y lectura de inglés avanzado. ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 3)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 5)
    relacion2.save
	
	
	curso = Course.new(:name => "Lenguajes y paradigmas de programación", :description => "A través de éste módulo, el estudiante conocerá sobre múltiples 
	lenguajes de programación, los paradigmas subyacentes y los fundamentos según los que se diseña un lenguaje de programación. Además, el alumno será 
	capaz de elegir un paradigma de programación y un lenguaje asociado para poder enfrentar problemas que requieran de una solución de programación.")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 3)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 7)
    relacion2.save
	
############ cursos 4 

	curso = Course.new(:name => "Algoritmos y estructuras de datos", :description => "A través de este módulo el alumno adquiere un conocimiento detallado
	de varias estructuras de datos de uso general y de algunos de sus algoritmos relacionados haciendo especial énfasis en el estudio de la correctitud y
	la eficiencia. Con esto se persigue que el alumno sea capaz de determinar qué combinación de estructuras de datos y algoritmos es la más apropiada
	para un problema dado. De este modo se fortalece el pensamiento algorítmico formal, una habilidad considerada clave dentro del dominio Software y 
	Manejo de Información, del área Formación Disciplinaria del Plan de Formación de Ingeniería Civil en Computación.")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 4)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 5)
    relacion2.save
    

	curso = Course.new(:name => "Planificación y estimación de proyectos de software", :description => " Capacidad de establecer un plan de proyecto 
	tomando en cuenta estimaciones de esfuerzo, costo, potenciales riesgos, y un plan de calidad asociado. ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 4)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 6)
    relacion2.save
	
############ cursos 5 semestre

	curso = Course.new(:name => "Proyecto de programación", :description => " ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 5)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 4)
    relacion2.save

	curso = Course.new(:name => "Estructuras computacionales discretas", :description => "A través de este módulo el alumno adquiere una serie de 
	herramientas matemáticas, que son fundamentales tanto para la modelación de problemas algorítmicos como para su análisis. De esta forma se continúa
	el fortalecimiento del pensamiento algorítmico formal, una habilidad considerada clave dentro del dominio Software y Manejo de Información, 
	del área Formación Disciplinaria del Plan de Formación de Ingeniería Civil en Computación.")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 5)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 5)
    relacion2.save

    curso = Course.new(:name => "Circuitos digitales", :description => "EAyudara a Resolver problemas 
    computacionales algorítmicamente, construir un modelo de computación para una problemática particular, diseñar, configurar y 
    administrar sistemas computacionales y redes de computadore, integrar conocimientos para la solución de problemas complejos de Ingeniería")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 5)
    relacion.save
	
############ cursos 6 semestre

	curso = Course.new(:name => "Requisitos de Software", :description => "Este módulo contribuye directamente al desarrollo de la competencias 
	aplicar ingeniería de requisitos de Sistemas de Software que se inserta en el dominio Software y Manejo de Información del Plan 
	de Formación de Ingeniería Civil en Computación. ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 6)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 6)
    relacion2.save

    curso = Course.new(:name => "Arquitectura de Computadores", :description => "Esta asignatura resume una gran área del conocimiento de las
     computadoras, ya que actúa como descriptiva de la arquitectura básica de las computadoras, las arquitecturas avanzadas, 
     los sistemas operativos, las redes e Internet. ")
    curso.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 6)
    relacion2.save

    curso = Course.new(:name => "Bases de datos", :description => "Este módulo contribuye directamente al desarrollo de las competencias 
    asociadas al área de Formación Básica y Disciplinaria, particularmente al dominio de Software y Manejo de Información. Específicamente,
    este módulo entrega al estudiante los conocimientos necesarios para ser capaz de conceptualizar entidades y sus relaciones para diseñar
    sistemas de bases de datos y construir aplicaciones que hacen uso de estos datos. De manera transversal se desarrollan las capacidades 
    análisis, síntesis, decisión, abstracción, elaboración de informes técnicos, y lectura de ingles técnico a nivel avanzado. ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 6)
    relacion.save

    curso = Course.new(:name => "Modelamiento y manipulación de Datos", :description => "Este módulo contribuye directamente al desarrollo de las competencias 
    asociadas al área de Formación Básica y Disciplinaria, particularmente al dominio de Software y Manejo de Información. Específicamente,
    este módulo entrega al estudiante los conocimientos necesarios para ser capaz de conceptualizar entidades y sus relaciones para diseñar
    sistemas de bases de datos y construir aplicaciones que hacen uso de estos datos. De manera transversal se desarrollan las capacidades 
    análisis, síntesis, decisión, abstracción, elaboración de informes técnicos, y lectura de ingles técnico a nivel avanzado. ")
    curso.save

    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 6)
    relacion2.save

    curso = Course.new(:name => "Circuitos digitales y Arquitectura de computadores", :description => "EAyudara a Resolver problemas 
    computacionales algorítmicamente, construir un modelo de computación para una problemática particular, diseñar, configurar y 
    administrar sistemas computacionales y redes de computadore, integrar conocimientos para la solución de problemas complejos de Ingeniería")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 6)
    relacion.save
	
############ cursos 7 semestre

	curso = Course.new(:name => "Diseño de Software", :description => "Este módulo contribuye directamente al desarrollo de la competencias 
		Diseña Sistema de Software” que se inserta en el dominio ”Software y Manejo de Información” del área ”Formación Básica y Disciplinaria,
		 del Plan de Formación de Ingeniería Civil en Computación.")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 7)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 7)
    relacion2.save
	
	curso = Course.new(:name => "Circuitos electrónicos para sistemas de comunicación", :description => "La asignatura de Circuitos Electrónicos
		para Sistemas de Comunicación presenta los conocimientos teóricos y prácticos necesarios para el diseño y desarrollo de una  aplicación 
		de comunicación genérica, a nivel físico, basada en circuitos electrónicos")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 7)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 5)
    relacion2.save


    curso = Course.new(:name => "Tecnologías Web", :description => "Este módulo contribuye, principalmente, al desarrollo de la competencia resolver problemas
	computacionales Algorítmicamente, del dominio Ciencias de la Computación e Ingeniería; y de manera secundaria, al desarrollo de la competencia diseñar 
	y evaluar el desempeño de algoritmos y estructuras de datos, del mismo dominio, así como de la competencia diseñar y construir sistemas de software 
	del dominio Ingeniería de Software ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 7)
    relacion.save


############ cursos 8 semestre

	curso = Course.new(:name => "Construcción y validación de software", :description => "Este módulo contribuye directamente al desarrollo de la
	 competencias “Desarrolla Software” que se inserta en el dominio ”Software y Manejo de Información” del Plan de Formación de Ingeniería 
	 Civil en Computación.")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 8)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 8)
    relacion2.save

    curso = Course.new(:name => "Modelos de computabilidad", :description => "A medida que transcurre el módulo, el alumno desarrolla la capacidad 
    	de enfrentar, entender y resolver problemas computacionales formales de complejidad creciente y logra una comprensió acabada de los modelos 
    	básicos de computabilidad. También persigue fortalecer el pensamiento algorítmico formal, una habilidad considerada clave dentro del dominio
    	Software y Manejo de Información ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 8)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 6)
    relacion2.save
	
   
   
	curso = Course.new(:name => "Sistemas operativos", :description => "Este módulo desarrolla en el estudiante la capacidad de resolver los problemas de 
		sincronización que surgen al implementar programas concurrentes, lo que es fundamental para el desarrollo de aplicaciones distribuidas, 
		para la construcción de servidores de software, y para el manejo de concurrencia en sistemas administradores de bases de datos. Asimismo,
		en este módulo el estudiante se habilitará para hacer análisis comparativos de las prestaciones de distintos tipos de sistemas computacionales, 
		en función de la forma en que el sistema operativo implementa los distintos servicios que ofrece, siendo esto un elemento necesario para 
		la administración, diseño y configuración de sistemas computacionales y redes de computadores")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 8)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 8)
    relacion2.save
	
############ cursos 9 semestre
 
	curso = Course.new(:name => "Administración de sistemas computacionales", :description => "La competencia más compleja que el estudiante 
		desarrollará en el módulo es: Administrar elfuncionamiento de un sistema operativo que brinda servicios, analizando la  infraestructura 
		que lo soporta, sus principales componentes y especícando su utilización a nivel local, de red o datos. El nivel de logro esperado 
		por el estudiante es avanzada, considerando que ha desarrollado competencias intermedias de redes, sistemas operativos y manipulación 
		de datos. ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 9)
    relacion.save   
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 9)
    relacion2.save

	curso = Course.new(:name => "Taller de desarrollo de software", :description => "Este módulo contribuye en el área Formación Disciplinaria 
		del Plan de Formación de Ingeniería Civil en Computación, al desarrollo de las competencias Aplicar Ingeniería de Requisitos, Diseñar 
		y Construir Sistemas de Software, Modelar y Manipular información y Administrar Proyectos Informáticos, que se insertan dentro del 
		dominio Ingeniería de Software. Además aporta al desarrollo de las competencias “Resolver problemas computacionales algorítmicamente,
		Diseñar y evaluar el desempeño de algoritmos y estructuras de datos y en menor grado, dependiendo del proyecto que se aborda a la
		competencia Diseñar, configurar y administrar sistemas computacionales y redes de computadores insertas en el dominio Ciencias de la
		Computación e Ingeniería")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 9)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 9)
    relacion2.save
   

	curso = Course.new(:name => "Diseño de sistemas de comunicación de datos", :description => "A través de éste módulo, el estudiante 
		aprenderá acerca del modelo OSI de la ISO. El alumno conocerá distintos métodos y estructuras que definen la confección de las 
		primeras capas del modelo OSI. Además, el alumno experimentará con los conceptos vistos en clases a través de laboratorios. Los 
		laboratorios serán una pieza fundamental en el aprendizaje puesto que el estudiante verá bajo redes reales cómo es que se aplican 
		todos los temas tratados en el módulo.")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 9)
    relacion.save
   	relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 7)
   	relacion2.save

	curso = Course.new(:name => "Diseño de análisis de algoritmos", :description => " En este módulo se estudia como resolver problemas 
		computacionales desde el punto de vista de la técnica de diseño de la solución; a diferencia de módulos anteriores donde el estudio 
		estaba basado en las distintas estructuras de datos a utilizar. Para esto se revisan varias técnicas de diseño de algoritmos 
		tradicionales y no tradicionales. Este módulo sigue la misma línea algorítmica fundamental de los módulos algoritmos y Estructuras
		de Datos, Estructuras Computacionales Discretas y Modelos de Computabilidad. De esta forma se persigue consolidar el pensamiento
		algorítmico formal, una habilidad considerada clave dentro del dominio Software y Manejo de Información, del área Formación 
		Disciplinaria del Plan de Formación de Ingeniería Civil en Computación")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 9)
    relacion.save
   
############ cursos 10 semestre

	curso = Course.new(:name => "Diseño de redes de computadoras", :description => " Planificar, implementar y gestionar el uso de las 
		Tecnologías de Información y Comunicación de una organización, a partir del análisis de sus requerimientos, teniendo en cuenta 
		los criterios de calidad, seguridad y ética profesional propiciando el trabajo en equipo")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 10)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 8)
    relacion2.save

    curso = Course.new(:name => "Inteligencia artificial", :description => " El objetivo del curso es capacitar al alumno para comprender 
    	y aplicar algunos conceptos fundamentales relacionados con el área de Inteligencia Artificial y las metodologías que se utilizan
    	 en ésta. En esta parte nos centramos en búsqueda, juegos de estrategia, búsqueda local, algoritmos genéticos, problemas de 
    	 satisfacción de restricciones y planificación.En particular el alumno sabrá aplicar técnicas clásicas y modernas para la resolución 
    	de problemas mediante búsqueda, y técnicas de aprendizaje automático")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 10)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 10)
    relacion2.save

    curso = Course.new(:name => "Gestión de seguridad informática", :description => " Planificar,instalar, configurar y gestionar el uso 
    	de las tecnologías de información y comunicaciones de una organización, a partir del análisis de sus requerimientos,teniendo en 
    	cuenta los criterios de calidad, seguridad y ética profesional, propiciando el trabajo en equipo")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 10)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 10)
    relacion2.save

    curso = Course.new(:name => "Desarrollo de aplicaciones para automatización", :description => " ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 10)
    relacion.save
    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 8)
    relacion2.save

    curso = Course.new(:name => "Taller de desarrollo de software II", :description => " ")
    curso.save

    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 10)
    relacion2.save

    curso = Course.new(:name => "Seminario de Algoritmos", :description => " ")
    curso.save

    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 10)
    relacion2.save
	
############ cursos 11 

	curso = Course.new(:name => "Bases de datos avanzadas", :description => " ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 11)
    relacion.save

    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 12)
    relacion2.save

    curso = Course.new(:name => "Sistemas Distribuidos", :description => "El alumno debe adquirir la capacidad de escribir programas 
    	paralelos sobre ambientes distribuidos, utilizando diversas técnicas y herramientas de programación. Para ello, conocerá los 
    	fundamentos de la programación concurrente y paralela, sincronización, métricas de desempeño y algoritmos distribuidos. ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 11)
    relacion.save

    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 11)
    relacion2.save

    curso = Course.new(:name => "Formulación de proyecto de titulación", :description => " ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 11)
    relacion.save
	
	relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 11)
    relacion2.save

############ cursos 12 semestre

	curso = Course.new(:name => "Proyecto de titulación", :description => " ")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 12)
    relacion.save

    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 12)
    relacion2.save


  end

end
