<?php 
$obtener_datos = select_one("SELECT * FROM tb_registro_afiliado where email='" .$rutas[1]. "'");
//var_dump($obtener_datos);

?>
  <form method="post">
 <section id="vista1" class="d-block">
    <div class="recuadro">
      <div class="container bg-white">
        <div class="row">
          <div class="col-md-12 py-4">
            <div class="bg-gris py-2 pl-2">
              <h2 class="text-gris text-center text-md-left">Registro del afiliado</h2>
            </div>
            <p class="text-justify text-md-left">Completa los siguientes datos para inscribirte en el programa de afiliados hostgator</p>  
          </div>
  

  
          <div class="col-md-12">
            <div class="cuadro mb-4 text-center text-md-left"><h5 class="ml-md-4">Información estándar</h5></div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="correo">Tu correo electrónico  <span>*</span> </label>
              <div class="col-md-6">
                <input type="email" class="form-control" id="correo" name="correo" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="dominio">Dominio de tu sitio web (website) <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="dominio" name="dominio" required >
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-3">
                <div class="row">
                  <div class="col-md-12 text-md-right">
                    <label class="font-weight-bold" for="impuesto">ID de impuestos, Seguro Social o IVA.</label>
                  </div>
                  <div class="col-md-12 text-md-right">
                    <label class="font-weight-bold" for="impuesto">TAX ID obligatorio si residente en USA.</label>
                  </div>
                </div>
              </div>
  
              <div class="col-md-6">
                <input type="text" class="form-control" id="impuesto" name="impuesto" required>
              </div>
  
            </div>
          </div>
  
          <div class="col-md-12">
            <div class="cuadro mb-4 text-center text-md-left"><h5 class="ml-md-4">Información personal</h5></div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="nombre">Nombre <span>*</span> </label>
  
              <div class="col-md-6">
                <input type="text" class="form-control " id="nombre" name="nombre" required>
              </div>
  
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="apellido">Apellido <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="apellido" name="apellido" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="direccion">Dirección de domicilio <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="direccion" name="direccion" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="ciudad">Ciudad <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="ciudad" name="ciudad" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="estado">Estado o provincia <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="estado" name="estado" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="telefono">Número de teléfono <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="telefono" name="telefono" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="postal">Código postal <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="postal" name="postal" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="pais">País <span>*</span> </label>
  
              <div class="col-md-6">
                <select id="pais" class="form-control" name="pais" required>
                  <option value="1">Mexico</option>
                </select>
              </div>
  
            </div>
          </div>
  
          <div class="col-md-12">
            <div class="cuadro mb-4 text-center text-md-left"><h5 class="ml-md-4">Cuenta PayPal para pago de comisión</h5></div>
  
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="paypal">Paypal <span>*</span> </label>
              <div class="col-md-6">
                <select name="paypal" id="paypal" class="form-control" required>
                  <option value="paypal" selected>paypal</option>
                </select>
              </div>
            </div>
  
            <div class="form-group row">
              <label class="col-md-3 text-md-right font-weight-bold" for="emailPaypal">Email PayPal <span>*</span> </label>
              <div class="col-md-6">
                <input type="email" class="form-control" id="emailPaypal" name="emailPaypal" required>
              </div>
            </div>
  
          </div>
  
          <div class="col-md-12 text-center text-md-left">
            <div class="cuadro mb-4"><h5 class="ml-md-4">Términos y condiciones</h5></div>
            
            <div class="form-group px-3">
              <textarea name="" id="" class="form-control" rows="15">
              TÉRMINOS DEL SERVICIO - PROGRAMA DE AFILIADOS LATAM
  
              01. EL PROGRAMA DE AFILIADOS
              Al registrarse en el Programa de Afiliados y aceptar los Términos del Programa, el afiliado cede un espacio publicitario en su sitio web o blog para divulgar la marca, los productos y los servicios de HostGator México, Colombia y Chile, a través de banners y enlaces. De esta manera, el afiliado utiliza el tráfico de su sitio web para generar más tráfico para el sitio web de HostGator del país de su preferencia, y en contrapartida, recibe una comisión por las indicaciones aprobadas originadas a través de su sitio web.
  
              02. INSCRIPCIÓN AL PROGRAMA
              Para participar en el Programa es necesario tener un sitio web o un blog completo que esté activo, actualizado y con contenido. El análisis de los nuevos registros es realizado manualmente y toma hasta 3 días hábiles. El inscrito recibirá respuesta por correo electrónico dentro de este plazo.
              No están permitidos los sitios web de contenido adulto o pronográfico. Además, no está permitida la inscripción de sitios web o blogs que inciten o promuevan la violencia, el odio contra individuos o grupos con base en la raza u origen étnico, deficiencia, género, religión, edad y/o orientación sexual. Tampoco están permitidos los sitios web de intercambio de tráfico, promociones y descarga ilegal de contenido. 
              Con la finalidad de preservación de la marca, HostGator se reserva el derecho de analizar la calidad del contenido de los sitios web registrados para participar en el programa de afiliados y puede reprobar o terminar un registro activo en cualquier momento sin necesidad de previo aviso.
              •	Sitios web de cupones 
              El permiso de participación para sitios web de oferta de cupones de descuento queda a criterio exclusivo del equipo especializado del Programa de Afiliados de HostGator y el registro de sitios web no autorizados puede ser reprobado. 
              Con el fin de preservar la marca, HostGator se reserva el derecho de analizar la calidad del contenido de los sitios candidatos a la participación en el Programa de Afiliados y podrá rechazar o terminar un registro ya activo en cualquier momento.
              •	Sitios web de contenido restringido 
              Es importante resaltar que los sitios web de contenido restringido, en los cuales la marca de HostGator es divulgada en un área reservada para miembros, tienen un comisionamiento fijo de $45 USD, independientemente del número de indicaciones aprobadas. Para información adicional sobre la participación de sitios web de contenido restringido, por favor entra en contacto a través del correo electrónico contacto@afiliadoshostgator.com.
              •	Desarrollador / Agencia
              El Programa de Afiliados ofrece una propuesta de participación diferenciada para desarrolladores y agencias que tengan registro oficial en su país de constitución  (ejemplo: NIT (Colombia), RUT (Chile), RFC (México). Los interesados deben entrar en contacto a través del correo electrónico contacto@afiliadoshostgator.com para mayor información. 
  
              03. DIVULGACIÓN: BANNERS Y ENLACES
              Después de la aprobación del registro, el afiliado recibe los datos de acceso al Panel de Afiliados, en el cual están disponibles diversos modelos de banners. El afiliado puede escoger el mejor, y más adecuado para su sitio web, copiar el código fuente y pegarlo en su sitio web. Cabe resaltar que cada creador de sitios/blog cuenta con una manera diferente de insertar el código fuente. Algunas de estas maneras son: a través de publicaciones (insertar una imagen y posteriormente el link de afiliado), widget o incorporación (embed) del enlace, entre otras maneras.
              El afiliado también puede divulgar la marca HostGator a través de un texto, creando un artículo o post recomendando a HostGator y utilizar hiperlinks con su enlace de afiliado. 
  
              04. DIVULGACIÓN: REDES SOCIALES
              El afiliado está autorizado a divulgar la URL de su sitio web y su enlace de afiliado en las redes sociales - Facebook, YouTube, Google+, Twitter, Pinterest y LinkedIn - siempre y cuando tenga un banner del Programa en su sitio web o blog. 
              No es permitido hacer SPAM u ofrecer cualquier tipo de incentivo, cupón o descuento sin autorización expresa del equipo de afiliados de HostGator. Tampoco es permitido que el afiliado se presente como HostGator de cualquier forma. La utilización de la marca HostGator de manera indebida o de acciones no permitidas resultará en la suspensión del afiliado y en la cancelación de todas las indicaciones pendientes. No se permite hacer anuncios patrocinados en redes sociales.
  
              05. DIVULGACIÓN: LINKS PATROCINADOS
              El afiliado debe estar de acuerdo con las siguientes reglas cuando decide anunciar en medios de PPC (pay-per-click o pago por clic) y comprar palabras-clave en redes de búsqueda como, por ejemplo, Google, Yahoo/Bing, entre otras. 
              Para preservar la integridad y la reputación de la marca HostGator, los afiliados tienen expresamente prohibido presentarse como HostGator o utilizar en anuncios particulares enlaces que redireccionen directamente al sitio web de HostGator. El uso de la marca HostGator de manera indebida resultará en la suspensión inmediata del afiliado y en la cancelación de todas las indicaciones pendientes. 
              Está prohibido utilizar cualquier palabra relacionada a la marca HostGator y sus variaciones y errores de escrita, tales como: “HostGator”, “hostgator”, “Host Gator”, “gator” host, “www.HostGator.mx”, “www.HostGator.co”, “www.HostGator.cl”, “HostGator México”, “Host Gator México”, “HostGator Colombia”, “Host Gator Colombia”, “HostGator Chile”, “Host Gator Chile”, “hostgator.com”, “review hostgator”, “hostgatro”.
              Está prohibido utilizar cualquier palabra relacionada con la marca HostGator junto con otro término adicional, tales como: [cupón hostgator], [promoción hostgator], [código promocional hostgator], [hosting hostgator]. No está permitido comprar términos en concordancia amplia, exacta o de frase. 
              La compra de palabras clave relacionada a HostGator resultará en la suspensión inmediata del afiliado y en la cancelación de todas las indicaciones pendientes. 
  
              06. DIVULGACIÓN: CORREO ELECTRÓNICO Y SOFTWARES DE COMUNICACIÓN POR INTERNET
              El afiliado no está autorizado a divulgar el enlace de afiliado (www.hostgator.mx/IDdelAfiliado; www.hostgator.co/IDdelafiliado; www.hostgator.cl/IDdelafiliado) en los siguiente medios, incluyendo, pero no limitado a: correo electrónico o softwares de comunicación por internet - Skype, WhatsApp, ICQ, Facebook Messenger, entre otros. En estos medios el afiliado debe divulgar únicamente la URL de su sitio web, de esta manera, los lectores serán redireccionados para el sitio web del afiliado y, en seguida podrán hacer clic en el banner o enlace de HostGator que debe estar disponible en el sitio web. 
              El afiliado tampoco está autorizado a utilizar los vehículos del propio HostGator - Foro, FAQ, Blog, Facebook, Twitter, Instagram, Google+, Linkedin, YouTube, Pinterest, entre otros - para fines de divulgación de su enlace de afiliado o sitio web. El uso del enlace de afiliado en los vehículos de HostGator resultará en la suspensión inmediata del afiliado y en la cancelación de las todas las indicaciones pendientes. 
  
              07. USO DE IFRAMES
              El afiliado no está autorizado a incorporar cualquier contenido que esté disponible en el sitio web de HostGator dentro de su sitio web. Copiar el código fuente y replicar el sitio web en otro lugar (Iframes) no está permitido y el afiliado que haga uso de este método de divulgación será suspendido del Programa y todas las indicaciones serán canceladas.
  
              08. INDICACIONES
              Las indicaciones quedan pendientes para análisis por un período de 70 a 100 días. Después de este período el afiliado recibe la comisión referente a las indicaciones que fueron aprobadas. Los pagos son efectuados a partir del valor mínimo de $90 USD, valor equivalente a 02 (dos) indicaciones aprobadas, considerándose para el periodo de análisis la fecha de la segunda indicación.  
              •	Criterios de Aprobación
              Para ser aprobada, la indicación debe estar de acuerdo con los siguientes criterios: 
              - La indicación debe ser un nuevo cliente para HostGator;
              - El cliente debe haber adquirido uno de los productos elegibles (Web Hosting, Reseller Hosting, VPS, Servidor Dedicado, Creador de Sitios);
              - El cliente debe estar al día con el pago del hosting hasta el final del periodo de análisis;
              - La indicación debe ser generada a partir del enlace del afiliado - tener el sitio/red social del afiliado como URL de referencia;
              - Las compras que no sean generadas a partir del enlace del afiliado no serán registradas por el sistema y no generan indicación/comisión. 
              •	Registro de indicaciones
              Las cookies son archivos de texto que almacenan información y permiten que las indicaciones sean rastreadas. El Programa utiliza ese mecanismo para rastrear los lectores que hacen clic en el banner o enlace del afiliado que debe esta disponibles en el sitio web o blog del afiliado. Es importante resaltar que en caso de que el lector deshabilite las cookies en su navegador, la indicación dejará de ser rastreada. Las cookies generadas para el Programa de Afiliados tienen validez de 10 días, por lo tanto, el lector del sitio del afiliado que haga clic en el banner o enlace del Programa en su sitio web, tiene hasta 10 días para efectuar la compra, en el 11º día, la indicación dejará de ser rastreada. 
              No es permitido que el afiliado haga compras para sí mismo o para terceros a través de su propio link de afiliado. Indicaciones originadas de compras del afiliado para sí mismo serán reprobadas. Indicaciones originadas de compras efectuadas por el afiliado para terceros no podrán ser reclamadas y no serán registradas por el sistema debido a reglas de seguridad.
              •	Reclamación de indicaciones
              El afiliado puede reclamar transacciones no registradas como indicaciones únicamente durante el tiempo en que la indicación esté en periodo de análisis. Después del análisis, no podrán ser reclamadas indicaciones retroactivamente.
  
              09. COMISIONES
              Las comisiones del Programa de Afiliados se pagan con base en la siguiente estructura: 
              •	1 a 5 indicaciones aprobadas en un mismo mes, $45 USD por indicación aprobada;
              •	6 a 10 indicaciones aprobadas en un mismo mes, $65 USD por indicación aprobada;
              •	11 a 20 indicaciones aprobadas en un mismo mes, $80 USD por indicación aprobada;
              •	Más de 21 indicaciones aprobadas en un mismo mes, $100 USD por indicación aprobada. 
              Ejemplo: si el afiliado tiene 25 indicaciones aprobadas en un mismo período, recibirá $2.500 USD ($100 USD x 25). El valor de la comisión está sujeto a las alteraciones y los nuevos valores serán válidos después de 30 días de la debida notificación por correo electrónico (enviada para la dirección electrónica del afiliado que está registrada en el Programa de Afiliados). 
              * Comisión válida para el periodo de lanzamiento del Programa de Afiliados. Los valores pueden cambiar en cualquier momento.
  
              •	Comisión para Sitios Web de contenido restringido
              La comisión para afiliados que tengan un sitio web de contenido restringido es fija, el afiliado recibe $45 USD por indicación aprobada. Para más información, envía un correo electrónico al equipo del Programa de Afiliados, disponible en contacto@afiliadoshostgator.com.
  
              10. PAGO DE LAS COMISIONES 
              Después del periodo de análisis, el afiliado que cumpla con todos los criterios de pago recibirá la comisión referente a las indicaciones aprobadas.
              •	Valor mínimo de pago 
              Para recibir las comisiones, el valor debe ser igual o mayor al pago mínimo de $90 USD, valor equivalente a 02 (dos) indicaciones aprobadas. En caso de que el afiliado no alcance el valor mínimo de pago, la comisión queda en espera para que el afiliado acumule nuevas comisiones y alcance el valor mínimo por un plazo máximo de 06 (seis) meses.
              •	Documentos requeridos para efectuar el pago
              Los pagos son realizados desde Estados Unidos en dólares americanos. Para que el pago de las comisiones se pueda realizar, requerimos el formulario W8 BEN, W8 BEN-E o W9 con los datos del afiliado. En el momento de aprobación de la cuenta enviamos un email con las instrucciones para que el afiliado diligencie el formulario adecuado de acuerdo a su caso específico. El formulario debe ser enviado al correo electrónico del programa de afiliados contacto@afiliadoshostgator.com.
              En caso de que los documentos y datos requeridos no sean recibidos por el Programa de Afiliados a tiempo para procesar el pago, éste será agendado para el mes siguiente.
              •	Fecha de pago
              El pago de las comisiones se realiza el día 10 de cada mes o en el siguiente día hábil, en caso del fin de semana y/o festivo.
              •	Forma de pago
              El pago de las comisiones es realizado únicamente a través de PayPal. Para esto, es importante que toda la información del afiliado esté registrada y actualizada correctamente en el panel de afiliado, que la cuenta paypal inscrita esté activa y que los documentos requeridos por el Programa de Afiliados estén completos y hayan sido enviados al correo electrónico contacto@afiliadoshostgator.com. 
              •	Plazo máximo de pago
              A partir del momento en el que la indicación es aprobada y se vuelve valor de comisión, si se alcanzó el valor mínimo para el pago de comisiones, la comisión quedará disponible para deposito en un plazo máximo de 06 (seis) meses. Después de este período, en caso de que el afiliado no haya informado los datos requeridos o no haya enviado los documentos esenciales para la emisión del pago, la comisión expirará y el afiliado perderá el derecho a recibirla. 
              •	Reclamación de valores
              El afiliado tiene un plazo de 30 días después de la finalización del análisis y pago de la comisión para cuestionar el valor recibido.
  
              11. RESPONSABILIDADES DEL SITIO WEB/BLOG
              El afiliado es el único responsable por el desarrollo, operación, manutención y por todo el contenido (texto, imagen, audio y video) de su sitio web. HostGator no tiene ninguna responsabilidad por el desarrollo, operación y manutención del sitio o del contenido disponible en el sitio web del afiliado. 
              El afiliado también es responsable por garantizar que el contenido publicado en su sitio web no viole o infrinja cualquier ley o los derechos de terceros (incluyendo, por ejemplo, derechos autorales, marcas registradas, privacidad y otros derechos personales o de propiedad), y también garantizar que el contenido publicado en su sitio web no sea difamatorio o ilegal. 
              El afiliado debe tener permiso expreso para usar parte del material protegido por derechos de autor o de propiedad de otros. HostGator no será responsable si el afiliado utiliza parte del material protegido por derechos de autor, en violación de la ley. Además de lo anterior, HostGator cancelará inmediatamente la participación del afiliado en el Programa de Afiliados, si entiende que el afiliado se ha comprometido en cualquiera de las siguientes actividades: 
              •	Envío de correo electrónico masivo no solicitado, o cualquier forma de Spam, incluyendo, pero no limitando a, grupos de discusión, listas, foros o violación de las políticas anti-spam de HostGator o la ley Federal; 
              •	Suministro de información inexacta o incompleta a HostGator sobre su identidad, dirección y otra información necesaria;
              •	Intento de engañar o defraudar a HostGator de cualquier forma;
              •	Falsificar los términos y condiciones de los sitios de HostGator;
              •	Involucrarse en actividades de propaganda de red de clics;
              •	Hacer cualquier anuncio negativo de HostGator;
              •	Utilizar la marca de HostGator de manera indebida;
              •	Envolverse en actividades relacionadas con cookie stuffing.
              No está autorizado el uso de vehículos propios de HostGator para fines de divulgación del Programa de Afiliados, como por ejemplo: redes sociales, foro, FAQ y blog de HostGator. El Programa de Afiliados ofrece una variedad de banners de divulgación que deberá ser utilizada en tu sitio o blog.
              El afiliado no está autorizado a ofrecer cualquier tipo de incentivo - promoción, bonus, cupon, premio, dinero, presente, entre otros, para impulsar sus ventas. Excepto cuando sea autorizado por escrito por HostGator. 
  
              12. VIGENCIA DEL ACUERDO
              Este acuerdo entra en vigor después del registro del afiliado en el Programa de Afiliados de HostGator y termina cuando sea solicitado por cualquiera de las partes, en cualquier momento, con o sin justa causa, mediante comunicación vía correo electrónico para la otra parte (contacto@afiliadoshostgator.com). 
              Un aviso por correo electrónico para la dirección registrada en el panel de afiliados es considerado suficiente para poner fin a este acuerdo. Si este acuerdo se termina debido a la violación de alguno de los términos por el afiliado, no estará calificado para recibir pagos de comisiones, incluso las comisiones referentes a las indicaciones aprobadas antes de la fecha de terminación. 
              Si este acuerdo se termina por cualquier otro motivo, el afiliado será elegible para recibir la comisión referente a las indicaciones aprobadas que se hayan producido durante la vigencia de este acuerdo y/o las indicaciones aprobadas que se reciban hasta la fecha de cierre. 
  
              13. MODIFICACIÓN
              HostGator se reserva el derecho de modificar cualquier información de los términos y condiciones previstos en el presente acuerdo en cualquier momento. Los cambios son informados a través de correo electrónico, para la dirección que el afiliado registró en el panel de afiliado, o en forma de aviso en el panel de afiliados. Estas formas de divulgación son consideradas suficientes para notificar al afiliado sobre una modificación de los términos y condiciones de este acuerdo. 
              Las modificaciones pueden incluir, pero no se limitan a, cambios en las comisiones disponibles, honorarios de comisiones, procedimientos de pago y reglas del Programa de Afiliados. Toda y cualquier modificación entra en vigor 48 horas después de la notificación por correo electrónico o a través del panel de afiliado, conforme a lo dispuesto anteriormente, a menos que se indique lo contrario. 
              La continuidad del afiliado en el Programa de Afiliados, después de la publicación de un aviso de cambio o un nuevo acuerdo, constituirá aceptación del cambio. Si el afiliado no está de acuerdo con el cambio deberá notificar a HostGator por escrito, dentro de las 48 horas de la alteración, rescindiendo expresamente el presente Acuerdo.
  
              14. RELACIÓN DE LAS PARTES
              El afiliado y HostGator son contratistas independientes y nada en este Acuerdo creará cualquier asociación comercial,  joint venture, agencia de franquicia, representación de ventas o relación de empleo entre las partes. El afiliado no tiene autoridad para hacer o aceptar cualquier oferta o representación en nombre de HostGator. El afiliado no puede hacer ninguna afirmación, ya sea en su sitio o no, que pueda contrarrestar cualquier artículo de este Acuerdo. El afiliado no es un agente de HostGator y HostGator se exime expresamente de la responsabilidad por cualquier conducta realizada por el afiliado. Cualquier anuncio negativo para la marca HostGator que venga de un afiliado, resultará en el cierre inmediato de la participación de este afiliado en el Programa y en la cancelación de cualquier indicación que esté pendiente. 
  
              15. LIMITACIONES DE RESPONSABILIDAD
              HostGator no se responsabiliza de cualquier pérdida de ingresos, beneficios o datos, derivados del presente Acuerdo, o del Programa de Afiliados, aunque se haya advertido de la posibilidad de tales daños. 
  
              16. AVISOS LEGALES
              HostGator no otorga ninguna garantía expresa o implícita, o declaraciones con respecto al Programa de Afiliados o cualquier servicio corporativo u otros artículos vendidos a través del Programa (incluyendo, pero no limitando, a garantías de adecuación, comercialización, no conformidad, o cualquier garantía implícita derivadas de un curso de ejecución, negociación o uso comercial). Además, HostGator no garantiza que el funcionamiento de sus sitios web no será ininterrumpido o libre de errores, y no será responsable por las consecuencias de cualquier interrupción o error. 
  
              17. REPRESENTACIONES Y GARANTÍAS
              El afiliado declara y garantiza que este Acuerdo es regular, válido y eficaz, y que está totalmente de acuerdo con sus términos, constituyendo una obligación legal, verdadera, vinculante y factible en su totalidad, todo de conformidad con los términos de este Acuerdo, y que la ejecución, de la entrega y del desempeño, por parte del afiliado en el presente Acuerdo, dentro de su capacidad legal y poder, han sido debidamente autorizadas por su parte, sin requerir de la aprobación o consentimiento de ninguna otra persona y no viola ni constituye un estándar bajo la (i) prestación de cualquier ley, regla, reglamento, orden, decisión o sentencia, a la que está sujeto o a la que el afiliado está vinculado, o (ii) los términos de cualquier otro contrato, documento o instrumento aplicable o vinculado al afiliado. En caso de que cualquier autoridad policial, administrativa o judicial notifique a HostGator con aviso de que el afiliado está involucrado en el envío de correo electrónico masivo no solicitado o de otra forma, está involucrado en comportamientos ilegales o conducta que viole los términos de dicho proveedor de servicio, HostGator se reserva el derecho de cooperar en cualquier investigación relativa a las actividades del afiliado, incluyendo la divulgación de la información de su cuenta. 
  
              18. CONFIDENCIALIDAD
              Para efectos del presente Acuerdo, el término “información confidencial” incluye pero no se limita a, cualquier información en los términos y disposiciones de este Acuerdo hecho específicamente para el sitio del afiliado y, en general, no disponible para otros miembros del Programa de Afiliados e informaciones financieras relativas a HostGator, clientes, o proveedor de lista de HostGator y los miembros del Programa de Afiliados, además del afiliado. 
              La información confidencial también incluye cualquier información que HostGator designe como confidencial durante la vigencia de este Acuerdo. El afiliado acuerda no divulgar ninguna información confidencial y que dicha información debe permanecer estrictamente confidencial, secreta y no debe ser utilizada directa o indirectamente por el afiliado para sus propios fines comerciales o para cualquier otro propósito, excepto y solamente en la medida en que tal información es normalmente conocida o accesible al público o si es exigida por ley o proceso legal. HostGator no otorga ninguna garantía, expresa o implícita, con respecto a cualquier información entregada, incluyendo garantías de comercialización, adecuación a una finalidad específica o la libertad de patentes, marcas o violaciones de derechos de autor, o resultantes de la ley, costumbre o comportamiento, o como la precisión o la integridad de la información.
  
              19.  INDEMNIZACIÓN
              El afiliado acuerda indemnizar, defender y mantener ilesa a HostGator, funcionarios, directores, agentes, otros afiliados, sucesores y apoderados, contra todas y cualquier reclamación, pérdida, daño o gasto, incluyendo honorarios de abogados, de cualquier naturaleza incurridos o sufridos por HostGator (colectivamente las “pérdidas”), en la medida en que esas pérdidas (o acciones en relación a la misma) surjan o se basen en (i) cualquier reclamación o reivindicación que amenace el uso de la marca HostGator por los afiliados o que viole los derechos de terceros (ii) el incumplimiento de cualquier promesa, pacto, representación o garantía hecha por el afiliado aquí o (iii) de cualquier reclamación relacionada al sitio del afiliado.  
  
              20. DIVERSOS
              Las cuentas que por acaso sean desactivadas del Programa de Afiliados, no podrán beneficiarse del Programa, a no ser que el afiliado obtenga el consentimiento de HostGator por escrito. HostGator se reserva el derecho de establecer un fondo de reserva con comisiones para un período de tiempo considerado necesario en situaciones en las que las ventas generadas por un afiliado tengan una tasa de cancelación alta y consistente. 
              HostGator será el único y final árbitro para cualquier disputa o reivindicación relacionada con la legitimidad de las ventas. Sujeto a estas restricciones, el presente Acuerdo será vinculante y ejecutable contra las partes y sus respectivos sucesores y apoderados. La incapacidad de HostGator de cumplir con cualquier disposición del presente Acuerdo no constituirá la renuncia a su derecho a forzar la realización de estas o de cualquier otra disposición del presente Acuerdo.
              </textarea>
            </div>
  
            <div class="form-group px-3">
              <input type="checkbox" name="terminos" required>
              <label class="text-md-right font-weight-bold" for=""> He leído, comprendido y estoy de acuerdo con los términos y condiciones mencionados anteriormente.</label>
            </div>
  
          </div>
  
  
          <div class="col-md-12">
            <div class="cuadro mb-4 text-center text-md-left"><h5 class="ml-md-4">Verificación de Cuenta</h5></div>
            <p class="pl-md-5 text-justify text-md-left">Por favor ingresa el código de seguridad mostrado en el recuadro. Este paso nos ayuda a prevenir registros automatizados.</p>
  
            <div class="form-group row">
              <label class="text-md-right font-weight-bold col-md-3" for="codigoSeguridad">Código de Seguridad <span>*</span> </label>
              <div class="col-md-6">
                <input type="text" id="codigoSeguridad" class="form-control col-md-6" name="codigoSeguridad" required>
              </div>
            </div>
  
            <div class="form-group row">
              <label for="" class="offset-md-3 col-md-9">123bc</label>
              <div class="offset-md-3 col-12 text-center text-md-left">
                <button type="submit" class="btn btn-success">Crear mi cuenta</button>
              </div>
            </div>
          </div>
  
  
  
        </div>
  
  
  
      </div>
  
    </div>

    <?php 

      $registro = new ControladorUsuarios();
      $registro ->ctrRegistroUsuarios_completo();

		?>	
    </form>
  </section>
  