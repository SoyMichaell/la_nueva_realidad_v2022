@extends('layouts.app')
@section('content')
@section('css')
    <style>
        textarea.form-control {
            height: 100px !important;
        }

    </style>
@endsection
<section class="section">
    <div class="section-header">
        <h1 class="page__heading">Diagnostico global</h1>
    </div>
    <div class="section-body">
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">Información empresa</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nit</th>
                                <td>{{ $empresa->nit }}</td>
                            </tr>
                            <tr>
                                <th>Razón social</th>
                                <td>{{ $empresa->razon_social }}</td>
                            </tr>
                            <tr>
                                <th>Telefono</th>
                                <td>{{ $empresa->telefono1 }}</td>
                            </tr>
                            <tr>
                                <th>Dirección</th>
                                <td>{{ $empresa->direccion }}</td>
                            </tr>
                            <tr>
                                <th>Municipio</th>
                                <td>{{ $empresa->municipio }}</td>
                            </tr>
                            <tr>
                                <th>CIIU Principal</th>
                                <td>{{ $empresa->ciiu_1 }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!--Mision-->
            <div class="card card-primary">
                <div class="card-header">Misíon</div>
                <div class="card-body">
                    <form action="" method="post">
                        <textarea class="form-control" name="mision" id="mision"></textarea>
                        <button class="btn btn-primary mt-2 mb-2" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
            <!--Vision-->
            <div class="card card-primary">
                <div class="card-header">Visíon</div>
                <div class="card-body">
                    <form action="" method="post">
                        <textarea class="form-control" name="vision" id="vision"></textarea>
                        <button class="btn btn-primary mt-2 mb-2" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
            <!--Objetivos estrategicos-->
            <div class="card card-primary">
                <div class="card-header">Objetivos estrategicos</div>
                <div class="card-body">
                    <form action="" method="post">
                        <textarea class="form-control" name="objestrategico" id="objestrategico"></textarea>
                        <button class="btn btn-primary mt-2 mb-2" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">Preguntas diagnostico</div>
                <div class="card-body">
                    <p>El presente instrumento fué diseñado y estructurado por SENNOVA como parte del proyecto La Nueva
                        Realidad, la información obtenida será utilizada para efectos académicos y su divulgación estará
                        orientada a la Comunidad Académica SENA.</p>
                    <div id="accordion">
                        <div class="accordion">
                            <div class="accordion-header" role="button" data-toggle="collapse"
                                data-target="#panel-body-1" aria-expanded="true">
                                <h4>Perspectiva de crecimiento y desarrollo</h4>
                            </div>
                            <!--Perspectiva de crecimiento y desarrollo-->
                                <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                    <form action="" method="post">
                                    <!--pregunta1-->
                                    <div class="alert alert-light">
                                        <p>1. ¿Realizo procesos de capacitación durante el año 2020?</p>
                                        <p>Respuesta: {{$empresa->pre1_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd1" id="preguntacd1">{{ old('preguntacd1') }}</textarea>
                                    </div>
                                    <!--pregunta1.1-->
                                    <div class="alert alert-light">
                                        <p>1.1. ¿Si su respuesta a la anterior pregunta fue POSITIVA en que área? Si su
                                            respuesta
                                            fue NO, omita está pregunta.?</p>
                                        <p>Respuesta: {{$empresa->pre1_1_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd1_1" id="preguntacd1_1">{{ old('preguntacd1_1') }}</textarea>
                                    </div>
                                    <!--pregunta2-->
                                    <div class="alert alert-light">
                                        <p>2. ¿En el año 2020 como consecuencia del covid-19, sus empleados realizaron
                                            trabajo en
                                            casa?</p>
                                        <p>Respuesta: {{$empresa->pre2_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd2" id="preguntacd2">{{ old('preguntacd2') }}</textarea>
                                    </div>
                                    <p><strong>Evalúe de 1 a 5 siendo 1 el menor ajuste realizado y 5 el mayor ajuste
                                            realizado.</strong></p>
                                    <!--pregunta3-->
                                    <div class="alert alert-light">
                                        <p>3. ¿Qué tipo de reformas debió realizar la empresa para ajustarse a los
                                            cambios generados
                                            por la pandemia? </p>
                                        <p>Respuesta:</p>
                                        <table class="table">
                                            <tr>
                                                <th>Ajuste de jornada laboral</th>
                                                <td>{{$empresa->pre3_1_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Ajuste o reducción de la producción</th>
                                                <td>{{$empresa->pre3_2_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Implementación de ventas en línea</th>
                                                <td>{{$empresa->pre3_3_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Introducción de Nuevos Productos y/o servicios.</th>
                                                <td>{{$empresa->pre3_4_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Cambios en la Presentación del Producto (Tamaño y Empaque)</th>
                                                <td>{{$empresa->pre3_5_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Ajustes a procesos y procedimientos</th>
                                                <td>{{$empresa->pre3_6_pcd}}</td>
                                            </tr>
                                        </table>
                                        <textarea class="form-control" name="preguntacd3" id="preguntacd3">{{ old('preguntacd3') }}</textarea>
                                    </div>
                                    <!--pregunta4-->
                                    <div class="alert alert-light">
                                        <p>4. De acuerdo a las reformas que debió realizar la empresa para ajustarse a
                                            los cambios
                                            generados por el Covid-19 durante el primer año, marque con una X sobre la
                                            reforma en la
                                            que haya generado más impacto sobre las ventas y/o empleo</p>
                                        <p>Respuesta:</p>
                                        <table class="table">
                                            <tr>
                                                <th>Circular 021 del 2020 (Medidas de protección al empleo)</th>
                                                <td>{{$empresa->pre4_1_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Ajuste o reducción de la producción</th>
                                                <td>{{$empresa->pre4_2_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Implementación de ventas en línea</th>
                                                <td>{{$empresa->pre4_3_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Introducción de Nuevos Productos y/o servicios.</th>
                                                <td>{{$empresa->pre4_4_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Cambios en la Presentación del Producto (Tamaño y Empaque)</th>
                                                <td>{{$empresa->pre4_5_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Distribución de productos a domicilio</th>
                                                <td>{{$empresa->pre4_6_pcd}}</td>
                                            </tr>
                                        </table>
                                        <textarea class="form-control" name="preguntacd4" id="preguntacd4">{{ old('preguntacd4') }}</textarea>
                                    </div>
                                    <!--pregunta5-->
                                    <div class="alert alert-light">
                                        <p>5. Durante el Primer año de convivencia con el Covid–19, usted se vio en la
                                            necesidad de
                                            prescindir de los servicios de algún colaborador?</p>
                                        <p>Respuesta: {{$empresa->pre5_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd5" id="preguntacd5">{{ old('preguntacd5') }}</textarea>
                                    </div>
                                    <!--pregunta5.1-->
                                    <div class="alert alert-light">
                                        <p>5.1 Si su respuesta anterior fue SI, señale ¿Cuantos?</p>
                                        <p>Respuesta: {{$empresa->pre5_1_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd5_1" id="preguntacd5_1">{{ old('preguntacd5_1') }}</textarea>
                                    </div>
                                    <!--pregunta6-->
                                    <div class="alert alert-light">
                                        <p>6. ¿Cuál ha sido el tipo de reinvención ó innovación realizada en su empresa
                                            para
                                            enfrentar los efectos de la pandemia?</p>
                                        <p>Respuesta: {{$empresa->pre6_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd6" id="preguntacd6">{{ old('preguntacd6') }}</textarea>
                                    </div>
                                    <!--pregunta7-->
                                    <div class="alert alert-light">
                                        <p>7. Durante el primer año de convivencia con el COVID-19 su empresa presento
                                            un:</p>
                                        <p>Respuesta: {{$empresa->pre7_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd7" id="preguntacd7">{{ old('preguntacd7') }}</textarea>
                                    </div>
                                    <!--pregunta8-->
                                    <div class="alert alert-light">
                                        <p>8. Evalúe de 1 a 5, siendo 1 menos importante y 5 más importante, con
                                            relación a los
                                            principales factores que usted considera han afectado su actividad
                                            productiva, durante
                                            el primer año de convivencia con el Covid-19.</p>
                                        <p>Respuesta:</p>
                                        <table class="table">
                                            <tr>
                                                <th>Disminución en las Ventas</th>
                                                <td>{{$empresa->pre8_1_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Incremento de Costos operacionales</th>
                                                <td>{{$empresa->pre8_2_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Endeudamiento y difícil acceso al crédito</th>
                                                <td>{{$empresa->pre8_3_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Falta de Capital de Trabajo</th>
                                                <td>{{$empresa->pre8_4_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Altos gastos administrativos</th>
                                                <td>{{$empresa->pre8_5_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Desconocimiento de herramientas efectivas para afrontar el cambio
                                                </th>
                                                <td>{{$empresa->pre8_6_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Falta de adopción de nuevas tecnologías</th>
                                                <td>{{$empresa->pre8_7_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Falta de adopción de nuevos canales de distribución</th>
                                                <td>{{$empresa->pre8_8_pcd}}</td>
                                            </tr>
                                        </table>
                                        <textarea class="form-control" name="preguntacd8" id="preguntacd8">{{ old('preguntacd8') }}</textarea>
                                    </div>
                                    <!--pregunta9-->
                                    <div class="alert alert-light">
                                        <p>9. ¿Cómo califica usted la gestión del gobierno nacional, departamental y
                                            local para
                                            atender las necesidades apremiantes de la microempresa Casanareña?</p>
                                        <p>Respuesta: No Hubo acompañamiento del gobierno.</p>
                                        <table class="table">
                                            <tr>
                                                <th>Gobierno Nacional</th>
                                                <td>{{$empresa->pre9_1_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Gobierno Departamental</th>
                                                <td>{{$empresa->pre9_2_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Gobierno Municipal</th>
                                                <td>{{$empresa->pre9_3_pcd}}</td>
                                            </tr>
                                        </table>
                                        <textarea class="form-control" name="preguntacd9" id="preguntacd9">{{ old('preguntacd9') }}</textarea>
                                    </div>
                                    <!--pregunta10-->
                                    <div class="alert alert-light">
                                        <p>10. ¿Cómo califica usted la gestión de las diferentes entidades para atender
                                            las
                                            necesidades apremiantes de la microempresa Casanareña?</p>
                                        <p>Respuesta: En cámara de comercio No hubo acompañamiento. en bancos recibió
                                            crédito </p>
                                        <table class="table">
                                            <tr>
                                                <th>Cámara de comercio</th>
                                                <td>{{$empresa->pre10_1_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Sena</th>
                                                <td>{{$empresa->pre10_2_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Fundaciones</th>
                                                <td>{{$empresa->pre10_3_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Banca comercial</th>
                                                <td>{{$empresa->pre10_4_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Entes gremiales</th>
                                                <td>{{$empresa->pre10_5_pcd}}</td>
                                            </tr>
                                        </table>
                                        <textarea class="form-control" name="preguntacd10" id="preguntacd10">{{ old('preguntacd10') }}</textarea>
                                    </div>
                                    <!--pregunta11-->
                                    <div class="alert alert-light">
                                        <p>11. ¿Evalúe de 1 a 5, siendo 1 la dificultad menos importante y 5 la
                                            dificultad más
                                            importante, que ha presentado en su empresa a raíz de los efectos del primer
                                            año de
                                            convivencia con el COVID -19?</p>
                                        <p>Respuesta:</p>
                                        <table class="table">
                                            <tr>
                                                <th>Pago nomina</th>
                                                <td>{{$empresa->pre11_1_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Compra a proveedores</th>
                                                <td>{{$empresa->pre11_2_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Pago de impuestos</th>
                                                <td>{{$empresa->pre11_3_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Pago de obligaciones financieras</th>
                                                <td>{{$empresa->pre11_4_pcd}}</td>
                                            </tr>
                                        </table>
                                        <textarea class="form-control" name="preguntacd11" id="preguntacd11">{{ old('preguntacd11') }}</textarea>
                                    </div>
                                    <!--pregunta12-->
                                    <div class="alert alert-light">
                                        <p>12. ¿Cuál ha sido la modalidad de trabajo más adoptada por su empresa,
                                            transcurrido el
                                            primer año de convivencia con la pandemia covid-19? </p>
                                        <p>Respuesta: {{$empresa->pre12_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd12" id="preguntacd12">{{ old('preguntacd12') }}</textarea>
                                    </div>
                                    <!--pregunta13-->
                                    <div class="alert alert-light">
                                        <p>13. Desde su punto de vista, el trabajo en casa este ha generado en el grupo
                                            de
                                            colaboradores de su empresa:</p>
                                        <p>Respuesta: {{$empresa->pre13_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd13" id="preguntacd13">{{ old('preguntacd13') }}</textarea>
                                    </div>
                                    <!--pregunta14-->
                                    <div class="alert alert-light">
                                        <p>14.¿Su microempresa ha dado algún tipo de compensación, por los recursos
                                            utilizados por
                                            el trabajador que se encuentra realizando teletrabajo?</p>
                                        <p>Respuesta: {{$empresa->pre14_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd14" id="preguntacd14">{{ old('preguntacd14') }}</textarea>
                                    </div>
                                    <!--pregunta15-->
                                    <div class="alert alert-light">
                                        <p>15. ¿En que ha estado representada esta compensación?</p>
                                        <p>Respuesta: {{$empresa->pre15_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd15" id="preguntacd15">{{ old('preguntacd15') }}</textarea>
                                    </div>
                                    <!--pregunta16-->
                                    <div class="alert alert-light">
                                        <p>16. Con respecto a su estilo de dirección de su microempresa, ¿qué
                                            competencias y
                                            habilidades más importantes ha debido implementar durante el primer año de
                                            contingencia
                                            por el Covid-19? Evalúe de 1 a 5, siendo 1 la menos importante y 5 la más
                                            importante.
                                        </p>
                                        <p>Respuesta:</p>
                                        <table class="table">
                                            <tr>
                                                <th>Adquirir conocimientos</th>
                                                <td>{{$empresa->pre16_1_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Conocer y manejar herramientas efectivas que ofrece el mercado</th>
                                                <td>{{$empresa->pre16_2_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Acceso eficiente a información que oriente a su microempresa</th>
                                                <td>{{$empresa->pre16_3_pcd}}</td>
                                            </tr>
                                            <tr>
                                                <th>Desarrollar capacidades de Innovación</th>
                                                <td>{{$empresa->pre16_4_pcd}}</td>
                                            </tr>
                                        </table>
                                        <textarea class="form-control" name="preguntacd16" id="preguntacd16">{{ old('preguntacd16') }}</textarea>
                                    </div>
                                    <!--pregunta17-->
                                    <div class="alert alert-light">
                                        <p>17. ¿Tiene elaborado el modelo de negocio para su microempresa?, (entiéndase
                                            modelo de
                                            negocio, como una herramienta de análisis que le permite saber cuál es su
                                            propuesta de
                                            valor o de utilidad, que ofrece al cliente a través de su producto o
                                            servicio, a qué
                                            costos, con qué medios y qué fuentes de ingresos va a tener) </p>
                                        <p>Respuesta: {{$empresa->pre17_1_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd17" id="preguntacd17">{{ old('preguntacd17') }}</textarea>
                                    </div>
                                    <!--pregunta7-->
                                    <div class="alert alert-light">
                                        <p>17.1. ¿Si contestó a la anterior pregunta SI, tuvo que ajustar su modelo de
                                            negocio
                                            durante el primer año de convivencia con el Covid-19 ?</p>
                                        <p>Respuesta: {{$empresa->pre17_2_pcd}}</p>
                                        <textarea class="form-control" name="preguntacd17_1" id="preguntacd17_1">{{ old('preguntacd17_1') }}</textarea>
                                    </div>
                                    <button class="btn btn-primary mt-2" type="submit">Guardar</button>
                                </form>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion-header" role="button" data-toggle="collapse"
                                data-target="#panel-body-2">
                                <h4>Perspectiva clientes</h4>
                            </div>
                                <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                    <form action="" method="post">
                                    <!--preguntapc1-->
                                    <div class="alert alert-light">
                                        <p>1. Considera que el mejoramiento del servicio y atención al cliente a
                                            representado para su microempresa un factor de:</p>
                                        <p>Respuesta: {{$empresa->pre1_pc}}</p>
                                        <textarea class="form-control" name="preguntac1" id="preguntac1">{{ old('preguntac1') }}</textarea>
                                    </div>
                                    <!--preguntapc2-->
                                    <div class="alert alert-light">
                                        <p>2. ¿Que tan efectivas considera las siguientes estratégias para recuperar y/o
                                            mantener los clientes de su microempresa? Evalúe de 1 a 5, siendo 1 la de
                                            menor importancia y 5 la de mayor importancia.</p>
                                        <p>Respuesta:</p>
                                        <table class="table">
                                            <tr>
                                                <th>Cambio en su portafolio de productos</th>
                                                <td>{{$empresa->pre2_1_pc}}</td>
                                            </tr>
                                            <tr>
                                                <th>Servicio personalizado</th>
                                                <td>{{$empresa->pre2_2_pc}}</td>
                                            </tr>
                                            <tr>
                                                <th>Nuevos canales de comunicación con los clientes</th>
                                                <td>{{$empresa->pre2_3_pc}}</td>
                                            </tr>
                                            <tr>
                                                <th>Diferentes alternativas de medios de pago</th>
                                                <td>{{$empresa->pre2_4_pc}}</td>
                                            </tr>
                                        </table>
                                        <textarea class="form-control" name="preguntac2" id="preguntac2">{{ old('preguntac2') }}</textarea>
                                    </div>
                                    <!--preguntapc3-->
                                    <div class="alert alert-light">
                                        <p>3. ¿Considera que la adopción de los protocolos de bioseguridad durante el
                                            primer año de convivencia con el Covid-19, generaron confianza en los
                                            clientes , provocando un aumento en las ventas?</p>
                                        <p>Respuesta: {{$empresa->pre3_pc}}</p>
                                        <textarea class="form-control" name="preguntac3" id="preguntac3">{{ old('preguntac3') }}</textarea>
                                    </div>
                                    <!--preguntapc4-->
                                    <div class="alert alert-light">
                                        <p>4. ¿Realiza usted alguna innovación para lograr una mejor la satisfacción al
                                            cliente ?</p>
                                        <p>Respuesta: {{$empresa->pre4_1_pc}}</p>
                                        <textarea class="form-control" name="preguntac4" id="preguntac4">{{ old('preguntac4') }}</textarea>
                                    </div>
                                    <!--preguntapc4.1-->
                                    <div class="alert alert-light">
                                        <p>4.1 Si su respuesta a la anterior pregunta fue SI, mencione que innovación ha
                                            realizado para lograr mejorar la satisfacción del cliente.</p>
                                        <p>Respuesta: {{$empresa->pre4_2_pc}}</p>
                                        <textarea class="form-control" name="preguntac4_1" id="preguntac4_1">{{ old('preguntac4_1') }}</textarea>
                                    </div>
                                    <!--preguntapc5-->
                                    <div class="alert alert-light">
                                        <p>5. ¿En qué porcentaje ha crecido el número de clientes de su negocio?</p>
                                        <p>Respuesta: {{$empresa->pre5_pc}}</p>
                                        <textarea class="form-control" name="preguntac5" id="preguntac5">{{ old('preguntac5') }}</textarea>
                                    </div>
                                    <!--preguntapc6-->
                                    <div class="alert alert-light">
                                        <p>6. ¿Qué porcentaje de los gastos totales de su negocio a direccionado para
                                            captar nuevos clientes?</p>
                                        <p>Respuesta: {{$empresa->pre6_pc}}</p>
                                        <textarea class="form-control" name="preguntac6" id="preguntac6">{{ old('preguntac6') }}</textarea>
                                    </div>
                                    <!--preguntapc7-->
                                    <div class="alert alert-light">
                                        <p>7. ¿Califique de 1 a 5, siendo 1 donde no ha habido quejas y 5 la opción que
                                            más quejas ha recibido, en relación con los aspectos que se enumeran a
                                            continuación ?</p>
                                        <p>Respuesta:</p>
                                        <table class="table">
                                            <tr>
                                                <th>Atención al cliente</th>
                                                <td>{{$empresa->pre7_1_pc}}</td>
                                            </tr>
                                            <tr>
                                                <th>Servicio al cliente</th>
                                                <td>{{$empresa->pre7_2_pc}}</td>
                                            </tr>
                                            <tr>
                                                <th>Producto</th>
                                                <td>{{$empresa->pre7_3_pc}}</td>
                                            </tr>
                                            <tr>
                                                <th>Protocolos bioseguridad</th>
                                                <td>{{$empresa->pre7_4_pc}}</td>
                                            </tr>
                                            <tr>
                                                <th>Precios</th>
                                                <td>{{$empresa->pre7_5_pc}}</td>
                                            </tr>
                                            <tr>
                                                <th>Horarios atención</th>
                                                <td>{{$empresa->pre7_6_pc}}</td>
                                            </tr>
                                        </table>
                                        <textarea class="form-control" name="preguntac7" id="preguntac7">{{ old('preguntac7') }}</textarea>
                                    </div>
                                    <!--preguntapc8-->
                                    <div class="alert alert-light">
                                        <p>8. ¿Considera importante dar respuesta al buzón de sugerencias oportunamente?
                                        </p>
                                        <p>Respuesta: {{$empresa->pre8_pc}}</p>
                                        <textarea class="form-control" name="preguntac8" id="preguntac8">{{ old('preguntac8') }}</textarea>
                                    </div>
                                    <!--preguntapc9-->
                                    <div class="alert alert-light">
                                        <p>9. ¿Qué estrategia de medición del nivel satisfacción del cliente o PQRs ha
                                            implementado en su microempresa?</p>
                                        <p>Respuesta: {{$empresa->pre9_pc}}</p>
                                        <textarea class="form-control" name="preguntac9" id="preguntac9">{{ old('preguntac9') }}</textarea>
                                    </div>
                                    <button class="btn btn-primary mt-2" type="submit">Guardar</button>
                                </form>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion-header" role="button" data-toggle="collapse"
                                data-target="#panel-body-3">
                                <h4>Perspectiva de procesos internos</h4>
                            </div>
                            <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                                <form action="" method="post">
                                    <!--preguntappi1-->
                                    <div class="alert alert-light">
                                        <p>1. ¿Su empresa tiene identificados claramente sus procesos internos?</p>
                                        <p>Respuesta: {{$empresa->pre1_pi}}</p>
                                        <textarea class="form-control" name="preguntapi1" id="preguntapi1">{{ old('preguntapi1') }}</textarea>
                                    </div>
                                    <!--preguntappi2-->
                                    <div class="alert alert-light">
                                        <p>2. ¿La empresa tiene documentados sus procesos internos?</p>
                                        <p>Respuesta: {{$empresa->pre2_pi}}</p>
                                        <textarea class="form-control" name="preguntapi2" id="preguntapi2">{{ old('preguntapi2') }}</textarea>
                                    </div>
                                    <!--preguntappi3-->
                                    <div class="alert alert-light">
                                        <p>3. ¿La empresa cuenta con alguna certificación reglamentaria para su sector?
                                        </p>
                                        <p>Respuesta: {{$empresa->pre3_1_pi}}</p>
                                        <textarea class="form-control" name="preguntapi3" id="preguntapi3">{{ old('preguntapi3') }}</textarea>
                                    </div>
                                    <!--preguntappi3.1-->
                                    <div class="alert alert-light">
                                        <p>3.1 Si su respuesta a la anterior pregunta fue SI, mencione ¿Cual?</p>
                                        <p>Respuesta: {{$empresa->pre3_2_pi}}</p>
                                        <textarea class="form-control" name="preguntapi3_1" id="preguntapi3_1">{{ old('preguntapi3_1') }}</textarea>
                                    </div>
                                    <!--preguntappi4-->
                                    <div class="alert alert-light">
                                        <p>4. ¿La empresa cuenta con alguna certificación de Calidad?</p>
                                        <p>Respuesta: {{$empresa->pre4_1_pi}}</p>
                                        <textarea class="form-control" name="preguntapi4" id="preguntapi4">{{ old('preguntapi4') }}</textarea>
                                    </div>
                                    <!--preguntappi4_1-->
                                    <div class="alert alert-light">
                                        <p>4.1 Si su respuesta a la anterior pregunta fue SI, mencione ¿Cual?</p>
                                        <p>Respuesta: {{$empresa->pre4_2_pi}}</p>
                                        <textarea class="form-control" name="preguntapi4_1" id="preguntapi4_1">{{ old('preguntapi4_1') }}</textarea>
                                    </div>
                                    <!--preguntappi5-->
                                    <div class="alert alert-light">
                                        <p>5. ¿Con relación al grado de afectación de sus procesos internos durante el
                                            primer año de convivencia con el Covid -19? Evalúe del 1 al 5, siendo 1 el
                                            menor nivel y 5 el mayor nivel de afectación.</p>
                                        <p>Respuesta:</p>
                                        <table class="table">
                                            <tr>
                                                <th>Gerenciales</th>
                                                <td>{{$empresa->pre5_1_pi}}</td>
                                            </tr>
                                            <tr>
                                                <th>Administrativos</th>
                                                <td>{{$empresa->pre5_2_pi}}</td>
                                            </tr>
                                            <tr>
                                                <th>Operativos</th>
                                                <td>{{$empresa->pre5_3_pi}}</td>
                                            </tr>
                                            <tr>
                                                <th>Comerciales</th>
                                                <td>{{$empresa->pre5_4_pi}}</td>
                                            </tr>
                                            <tr>
                                                <th>Talento humano</th>
                                                <td>{{$empresa->pre5_5_pi}}</td>
                                            </tr>
                                            <tr>
                                                <th>Productivos</th>
                                                <td>{{$empresa->pre5_6_pi}}</td>
                                            </tr>
                                            <tr>
                                                <th>No tiene identificados los procesos</th>
                                                <td>{{$empresa->pre5_7_pi}}</td>
                                            </tr>
                                        </table>
                                        <textarea class="form-control" name="preguntapi5" id="preguntapi5">{{ old('preguntapi5') }}</textarea>
                                    </div>
                                    <!--preguntappi6-->
                                    <div class="alert alert-light">
                                        <p>6. ¿Cuáles han sido los cambios más importantes que ha tenido con sus
                                            proveedores durante el primer año de convivencia con el Covid-19?</p>
                                        <p>Respuesta: {{$empresa->pre6_1_pi}}</p>
                                        <textarea class="form-control" name="preguntapi6" id="preguntapi6">{{ old('preguntapi6') }}</textarea>
                                    </div>
                                    <!--preguntappi6_1-->
                                    <div class="alert alert-light">
                                        <p>6.1 Si su selección a la pregunta anterior fue CAMBIOS EN LOS MEDIOS DE PAGO,
                                            INDIQUE CUALES</p>
                                        <p>Respuesta: {{$empresa->pre6_2_pi}}</p>
                                        <textarea class="form-control" name="preguntapi6_1" id="preguntapi6_1">{{ old('preguntapi6_1') }}</textarea>
                                    </div>
                                    <!--preguntappi7-->
                                    <div class="alert alert-light">
                                        <p>7. ¿Identifique cuáles han sido los cambios más importantes que ha tenido con
                                            sus clientes?</p>
                                        <p>Respuesta: {{$empresa->pre7_pi}}</p>
                                        <textarea class="form-control" name="preguntapi7" id="preguntapi7">{{ old('preguntapi7') }}</textarea>
                                    </div>
                                    <!--preguntappi8-->
                                    <div class="alert alert-light">
                                        <p>8. Considera que el grado de rentabilidad de los nuevos productos lanzados al
                                            mercado durante el primer año de convivencia con el Covid-19 ha sido:</p>
                                        <p>Respuesta: {{$empresa->pre8_pi}}</p>
                                        <textarea class="form-control" name="preguntapi6_1" id="preguntapi8">{{ old('preguntapi8') }}</textarea>
                                    </div>
                                    <button class="btn btn-primary mt-2" type="submit">Guardar</button>
                                </form>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion-header" role="button" data-toggle="collapse"
                                data-target="#panel-body-4">
                                <h4>Perspectiva financiera</h4>
                            </div>
                            <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                                <form action="" method="post">
                                    <!--preguntapf1-->
                                    <div class="alert alert-light">
                                        <p>1. ¿La empresa se sujetó al subsidio de Nómina (PAEF) decretado por el
                                            Gobierno Nacional?</p>
                                        <p>Respuesta: {{$empresa->pre1_pf}}</p>
                                        <textarea class="form-control" name="preguntapf1" id="preguntapf1">{{ old('preguntapf1') }}</textarea>
                                    </div>
                                    <!--preguntapf_1.1-->
                                    <div class="alert alert-light">
                                        <p>1.1 . Si contestó No a la anterior pregunta marque alguna(s) de las
                                            siguientes razones:</p>
                                        <p>Respuesta: {{$empresa->pre1_1_pf}}</p>
                                        <textarea class="form-control" name="preguntapf1_1" id="preguntapf1_1">{{ old('preguntapf1_1') }}</textarea>
                                    </div>
                                    <!--preguntapf2-->
                                    <div class="alert alert-light">
                                        <p>2. ¿Recibió algún beneficio de las entidades financieras como empresario a
                                            raíz de la contingencia por el Covid–19?</p>
                                        <p>Respuesta: {{$empresa->pre2_pf}}</p>
                                        <textarea class="form-control" name="preguntapf2" id="preguntapf2">{{ old('preguntapf2') }}</textarea>
                                    </div>
                                    <!--preguntapf2.1-->
                                    <div class="alert alert-light">
                                        <p>2.1 Si su respuesta a la anterior pregunta fue SI, mencione ¿Cual?</p>
                                        <p>Respuesta: {{$empresa->pre2_1_pf}}</p>
                                        <textarea class="form-control" name="preguntapf2_1" id="preguntapf2_1">{{ old('preguntapf2_1') }}</textarea>
                                    </div>
                                    <!--preguntapf3-->
                                    <div class="alert alert-light">
                                        <p>3. ¿Realizó reliquidaciones de sus obligaciones financieras originadas
                                            principalmente por la pandemia?</p>
                                        <p>Respuesta: {{$empresa->pre3_1_pf}}</p>
                                        <textarea class="form-control" name="preguntapf3" id="preguntapf3">{{ old('preguntapf3') }}</textarea>
                                    </div>
                                    <!--preguntapf3_1-->
                                    <div class="alert alert-light">
                                        <p>3.1 Si respondió SI a la anterior pregunta, ¿ésta reliquidación de las
                                            obligaciones financieras le permitió generar flujo de caja mejorando la
                                            situación de su empresa?</p>
                                        <p>Respuesta: {{$empresa->pre3_2_pf}}</p>
                                        <textarea class="form-control" name="preguntapf3_1" id="preguntapf3_1">{{ old('preguntapf3_1') }}</textarea>
                                    </div>
                                    <!--preguntapf4-->
                                    <div class="alert alert-light">
                                        <p>4.  Su empresa lleva Contabilidad de:</p>
                                        <p>Respuesta: {{$empresa->pre4_pf}}</p>
                                        <textarea class="form-control" name="preguntapf4" id="preguntapf4">{{ old('preguntapf4') }}</textarea>
                                    </div>
                                    <!--preguntapf5-->
                                    <div class="alert alert-light">
                                        <p>5.  ¿La facturación relacionada con esta área Contable es generada y archivada adecuadamente?</p>
                                        <p>Respuesta: {{$empresa->pre5_pf}}</p>
                                        <textarea class="form-control" name="preguntapf5" id="preguntapf5">{{ old('preguntapf5') }}</textarea>
                                    </div>
                                    <!--preguntapf6-->
                                    <div class="alert alert-light">
                                        <p>6. ¿La empresa realiza control mensual de sus costos y gastos?</p>
                                        <p>Respuesta: {{$empresa->pre6_pf}}</p>
                                        <textarea class="form-control" name="preguntapf6" id="preguntapf6">{{ old('preguntapf6') }}</textarea>
                                    </div>
                                    <!--preguntapf7-->
                                    <div class="alert alert-light">
                                        <p>7. ¿Cuál ha sido el nivel de afectación de sus costos y gastos durante el primer año de convivencia con el  Covid-19?</p>
                                        <p>Respuesta: {{$empresa->pre7_pf}}</p>
                                        <textarea class="form-control" name="preguntapf7" id="preguntapf7">{{ old('preguntapf7') }}</textarea>
                                    </div>
                                    <!--preguntapf8-->
                                    <div class="alert alert-light">
                                        <p>8. ¿Realiza una planificación presupuestal de sus ingresos y egresos?  </p>
                                        <p>Respuesta: {{$empresa->pre8_pf}}</p>
                                        <textarea class="form-control" name="preguntapf8" id="preguntapf8">{{ old('preguntapf8') }}</textarea>
                                    </div>
                                    <!--preguntapf9-->
                                    <div class="alert alert-light">
                                        <p>9. ¿Tiene usted conocimiento de que son los Indicadores financieros?</p>
                                        <p>Respuesta: {{$empresa->pre9_1_pf}}</p>
                                        <textarea class="form-control" name="preguntapf9" id="preguntapf9">{{ old('preguntapf9') }}</textarea>
                                    </div>
                                    <!--preguntapf9_1-->
                                    <div class="alert alert-light">
                                        <p>9.1 Si respondió SI a la anterior pregunta, su empresa tiene definidos e interpreta los indicadores financieros?</p>
                                        <p>Respuesta: {{$empresa->pre9_2_pf}}</p>
                                        <textarea class="form-control" name="preguntapf9_1" id="preguntapf9_1">{{ old('preguntapf9_1') }}</textarea>
                                    </div>
                                    <!--preguntapf10-->
                                    <div class="alert alert-light">
                                        <p>10. ¿Le fueron aprobados préstamos de la banca comercial durante la pandemia?</p>
                                        <p>Respuesta: {{$empresa->pre10_1_pf}}</p>
                                        <textarea class="form-control" name="preguntapf10" id="preguntapf10">{{ old('preguntapf10') }}</textarea>
                                    </div>
                                    <!--preguntapf10_1-->
                                    <div class="alert alert-light">
                                        <p>10.1 Si respondió  Sí a la anterior pregunta ¿Mencione qué montos?</p>
                                        <p>Respuesta: $ {{$empresa->pre10_2_pf}}</p>
                                        <textarea class="form-control" name="preguntapf10_1" id="preguntapf10_1">{{ old('preguntapf10_1') }}</textarea>
                                    </div>
                                     <!--preguntapf11-->
                                     <div class="alert alert-light">
                                        <p>11. ¿Cómo ha financiado sus actividades a lo largo de la pandemia del Covid-19?</p>
                                        <p>Respuesta: {{$empresa->pre11_pf}}</p>
                                        <textarea class="form-control" name="preguntapf11" id="preguntapf11">{{ old('preguntapf11') }}</textarea>
                                    </div>
                                     <!--preguntapf12-->
                                     <div class="alert alert-light">
                                        <p>12. La liquidez o la disponibilidad de efectivo de su empresa durante el primer año de convivencia con  la pandemia por el Covid-19 ha sido:</p>
                                        <p>Respuesta: {{$empresa->pre12_pf}}</p>
                                        <textarea class="form-control" name="preguntapf12" id="preguntapf12">{{ old('preguntapf12') }}</textarea>
                                    </div>
                                     <!--preguntapf13-->
                                     <div class="alert alert-light">
                                        <p>13. Considera que las ganancias de su negocio durante el primer año de covid-19  en comparación al año anterior:</p>
                                        <p>Respuesta: {{$empresa->pre13_pf}}</p>
                                        <textarea class="form-control" name="preguntapf13" id="preguntapf13">{{ old('preguntapf13') }}</textarea>
                                    </div>
                                    <!--preguntapf14-->
                                    <div class="alert alert-light">
                                        <p>14. Reconoce que la pérdida de sus ganancias en el primer año del covid-19 obedeció principalmente a:</p>
                                        <p>Respuesta: {{$empresa->pre14_pf}}</p>
                                        <textarea class="form-control" name="preguntapf14" id="preguntapf14">{{ old('preguntapf14') }}</textarea>
                                    </div>
                                    <!--preguntapf15-->
                                    <div class="alert alert-light">
                                        <p>15. ¿Durante la pandemia los ingresos que ha recibido su negocio o empresa le han permitido sostenerse económicamente? </p>
                                        <p>Respuesta: {{$empresa->pre15_pf}}</p>
                                        <textarea class="form-control" name="preguntapf15" id="preguntapf15">{{ old('preguntapf15') }}</textarea>
                                    </div>
                                    <button class="btn btn-primary mt-2" type="submit">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
@endsection
