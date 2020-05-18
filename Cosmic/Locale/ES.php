<?php
use App\Config;

$GLOBALS['language'] = array (
    'website' => array (
        /*     App/View/base.html     */
        'base' => array(
            'nav_home'              => 'Inicio',

            'nav_community'         => 'Comunidad',
            'nav_news'              => 'Noticias',
            'nav_jobs'              => 'Trabajos',
            'nav_photos'            => 'Fotos',
            'nav_staff'             => 'Staff',
            'nav_team'              => 'Equipo',
            'nav_exchange'          => 'Tienda',

            'nav_shop'              => 'tienda',
            'nav_buy_points'        => 'Tienda ' . Config::site['shortname'],
            'nav_buy_club'          => 'Comprar ' . Config::site['shortname'] . ' Club',
            'nav_purchasehistory'   => 'Historial de compras',
            'nav_changename'        => 'Cambiar ' . Config::site['shortname'] . 'nombre',
            'nav_drawyourbadge'     => 'Dibuja tu placa',
          
            'nav_highscores'        => 'Puntuaciones',

            'nav_forum'             => 'Mis Grupos',

            'nav_helptool'          => 'Soporte',
            'nav_helptickets'       => 'Tickets de Soporte',

            'nav_housekeeping'      => 'Administración',

            'close'                 => 'Cerrar',
            'cookies'               => 'utiliza cookies propias y de terceros para proporcionar un mejor servicio y también garantiza que los anuncios coincidan mejor con sus preferencias. Si utiliza nuestro sitio web, acepta nuestra política de cookies.',
            'read_more'             => 'Leer más',
            'thanks_for_playing'    => 'Gracias por jugar',
            'made_with_love'        => 'fue hecho con mucho amor',
            'credits'               => 'MiniBestia',
            'and_all'               => 'Gracias a todo el equipo que forma parte',

            'login_name'            => 'Nombre',
            'login_password'        => 'Contraseña',
            'login_save_data'       => 'Recordar',
            'login_lost_password'   => '¿Perdiste tu contraseña?',

            'report_message'        => 'Reportar este mensaje',
            'report_certainty'      => 'Estás a punto de reportar este mensaje. ¿Estas seguro de que quieres reportar este mensaje?',
            'report_inappropriate'  => 'Sí, esto es inapropiado!',

            'user_to'               => 'Entrar a',
            'user_profile'          => 'Mi Perfil',
            'user_settings'         => 'Configuraciones',
            'user_logout'           => 'Desconectarme',

            'header_slogan'         => 'Virtual world for young people!',
            'header_slogan2'        => 'Join our community and make new friends',
            'header_login'          => 'Entrar',
            'header_register'       => 'Registrate Gratis',
            'header_to'             => 'Entrar a',

            'footer_helptool'       => 'Ayuda',
            'footer_rules'          => 'Reglas',
            'footer_terms'          => 'Terminos & Condiciones',
            'footer_privacy'        => 'Declaración de privacidad',
            'footer_cookies'        => 'Política de cookies',
            'footer_guide'          => 'Guía para padres'
        ),

        /*     public/assets/js/web     */
        'javascript' => array(
            'web_customforms_markedfields'                  => 'All fields marked with an * are mandatory.',
            'web_customforms_loadingform'                   => 'Loading form...',
            'web_customforms_next'                          => 'Siguiente',
            'web_customforms_close'                         => 'Cerrar',
            'web_customforms_participation'                 => 'Thanks for your participation!',
            'web_customforms_sent'                          => 'Your answers have been sent and will be analyzed by the person who starts this form.',
            'web_customforms_answer'                        => 'Your answer',

            'web_dialog_cancel'                             => 'Cancelar',
            'web_dialog_validate'                           => 'Validar',
            'web_dialog_confirm'                            => 'Confirma tu elección',

            'web_hotel_backto'                              => 'Regresar a ' . Config::site['shortname'] . ' Hotel',

            'web_fill_pincode'                              => 'Enter the pin code that you specified when creating the extra security on your account. Well, I forgot this one? Then contact us via the ' . Config::site['shortname'] . ' Help Tool',
            'web_twostep'                                   => 'Two-step authorization!',
            'web_login'                                     => 'You must be logged in to report this message!',
            'web_loggedout'                                 => 'Desconectado',

            'web_notifications_success'                     => 'Éxito',
            'web_notifications_error'                       => 'Error',
            'web_notifications_info'                        => 'Información',

            'web_page_article_login'                        => 'Debes iniciar sesión para publicar un comentario.',

            'web_page_community_photos_login'               => 'Debes iniciar sesión para que te gusten las fotos.',
            'web_page_community_photos_loggedout'           => 'Desconectado',

            'web_page_forum_change'                         => 'Change',
            'web_page_forum_cancel'                         => 'Cancel',
            'web_page_forum_oops'                           => 'Oops...',
            'web_page_forum_topic_closed'                   => 'This topic is closed and you can no longer respond.',
            'web_page_forum_login_toreact'                  => 'In order to respond, you need to be logged in!',
            'web_page_forum_login_tolike'                   => 'You must be logged in to like this post!',
            'web_page_forum_loggedout'                      => 'Desconectado',

            'web_page_profile_login'                        => 'You must be logged in to like photos!',
            'web_page_profile_loggedout'                    => 'Desconectado',

            'web_page_settings_namechange_request'          => 'Request',
            'web_page_settings_namechange_not_available'    => 'Not available',
            'web_page_settings_namechange_choose_name'      => 'Cambiar ' . Config::site['shortname'] . 'nombre',

            'web_page_settings_verification_oops'           => 'Oops...',
            'web_page_settings_verification_fill_password'  => 'Enter your password!',
            'web_page_settings_verification_2fa_on'         => 'Google Authentication is currently set on your account. To use another verification method, you must first remove your old verification!',
            'web_page_settings_verification_2fa_secretkey'  => 'Have you scanned the QR code on your mobile? Then enter the secret key to confirm your account!',
            'web_page_settings_verification_2fa_authcode'   => 'Authentication code',
            'web_page_settings_verification_pincode_on'     => 'You currently have a pin code set on your account. To use another verification method you first have to remove your old verification!',
            'web_page_settings_verification_2fa_off'        => 'To disable Google Authentication we ask you to enter the secret code from the generator.',
            'web_page_settings_verification_pincode_off'    => 'To disable the pincode authentication we ask you to enter your pincode.',
            'web_page_settings_verification_pincode'        => 'Pincode code',
            'web_page_settings_verification_switch'         => 'Select the switch button to enable an authentication method!',

            'web_page_shop_offers_neosurf_name'             => 'Neosurf',
            'web_page_shop_offers_neosurf_description'      => 'Pay easily with Paypal and your GOTW-Points will be topped up immediately.',
            'web_page_shop_offers_neosurf_dialog'           => 'Enter your Paypal e-mailaddress below to continue.',
            'web_page_shop_offers_paypal_name'              => 'Paypal',
            'web_page_shop_offers_paypal_description'       => 'Pay easily with Paypal and your GOTW-Points will be topped up immediately.',
            'web_page_shop_offers_paypal_dialog'            => 'Enter your Paypal e-mailaddress below to continue.',
            'web_page_shop_offers_sms_name'                 => 'SMS',
            'web_page_shop_offers_sms_description'          => 'Send a code by SMS and receive a GOTW-Points code.',
            'web_page_shop_offers_sms_dialog'               => 'Send the code below in an SMS to get a GOTW-Points code.',
            'web_page_shop_offers_audiotel_name'            => 'Audiotel',
            'web_page_shop_offers_audiotel_description'     => 'Call a number one or more times to get a GOTW-Points code.',
            'web_page_shop_offers_audiotel_dialog'          => 'Call the number below to get a GOTW-Points code.',
            'web_page_shop_offers_pay_with'                 => 'Pay with',
            'web_page_shop_offers_points_for'               => 'GOTW-Points for',
            'web_page_shop_offers_get_code'                 => 'Get a GOTW-Points code',
            'web_page_shop_offers_fill_code'                => 'Enter your GOTW-Points code',
            'web_page_shop_offers_fill_code_desc'           => 'Enter your GOTW-Points code below to receive your GOTW-Points.',
            'web_page_shop_offers_submit'                   => 'Submit',
            'web_page_shop_offers_success'                  => 'Purchase successful!',
            'web_page_shop_offers_received'                 => 'Thank you for your purchase. You got',
            'web_page_shop_offers_received2'                => 'GOTW-Points.',
            'web_page_shop_offers_close'                    => 'Close',
            'web_page_shop_offers_failed'                   => 'Purchase failed!',
            'web_page_shop_offers_failed_desc'              => 'The purchase failed. Try again or contact us via the Help Tool.',
            'web_page_shop_offers_back'                     => 'Back',
            'web_page_shop_offers_no_card'                  => 'If you do not have a Neosurf prepaid card, you can see the',
            'web_page_shop_offers_no_card2'                 => 'points of sale',
            'web_page_shop_offers_to'                       => 'to',
            'web_page_shop_offers_buy_code'                 => 'Purchase access code',
            'web_page_hotel_loading'                        => 'is now loading...',
            'web_page_hotel_sometinhg_wrong_1'              => 'Oops, there is something wrong!.',
            'web_page_hotel_sometinhg_wrong_2'              => 'Reload the page',
            'web_page_hotel_sometinhg_wrong_3'              => 'Or create a ticket in the helptool',
            'web_page_hotel_welcome_at'                     => 'Welcome at',
            'web_page_hotel_soon'                           => 'Grab a drink, we\'ll be there soon...',
            'web_hotel_active_flash_1'                      => 'Youre almost in ' . Config::site['shortname'] .'!',
            'web_hotel_active_flash_2'                      => 'Click here',
            'web_hotel_active_flash_3'                      => 'and click on the left side at "allow" flash, to enable flash.',
            
        ),

        /*     App/View/Community     */
        'article' => array (
            'reactions'                 => 'Comentarios',
            'reactions_empty'           => 'Todavía no hay comentarios.',
            'reactions_fill'            => 'Escribe tu mensaje aquí...',
            'reactions_post'            => 'Enviar',
            'latest_news'               => 'Ultimas Noticias',
            'reaction_hidden_yes'       => '¡Las noticias hechas invisibles!',
            'reaction_hidden_no'        => '¡Noticias hechas visibles!',
            'forbidden_words'           => 'Su mensaje contiene palabras prohibidas',
        ),
        'forum' => array (
          /*  Forum/index.html  */
            'index_subject'             => 'Subject',
            'index_topics'              => 'Topics',
            'index_latest_topic'        => 'Latest topic',
            'index_empty'               => 'No topics',
            'index_latest_activities'   => 'Latest activities',
            'index_by'                  => 'by',

          /*  Forum/category.html  */
            'category_new_topic'        => 'New topic',
            'category_back'             => 'Back',
            'category_topics'           => 'Topics',
            'category_posts'            => 'Posts',
            'category_latest_reacts'    => 'Latest reactions',
            'category_topic_by'         => 'By',
            'category_no_reacts'        => 'No reactions',
            'category_latest_react_by'  => 'Last reaction by',
            'category_create_topic'     => 'Make new topic',
            'category_subject'          => 'Subject',
            'category_description'      => 'Description',
            'category_create_button'    => 'Make topic',
            'category_or'               => 'or',
            'category_cancel'           => 'cancel',

          /*  Forum/topic.html  */
            'topic_react'               => 'React',
            'topic_close'               => 'Close',
            'topic_reopen'              => 'Re-open',
            'topic_since'               => 'Since:',
            'topic_posts'               => 'Posts:',
            'topic_topic'               => 'Topic:',
            'topic_reaction'            => 'Reaction:',
            'topic_closed'              => 'Pay attention! This topic is closed, do you disagree? Then contact us via the',
            'topic_helptool'            => 'helptool',
            'topic_and'                 => 'and',
            'topic_likes_1'             => 'others like this!',
            'topic_likes_2'             => 'likes this!',
            'topic_likes_3'             => 'like this!'
        ),

        /*     App/View/Community     */
        'community_photos' => array (
            'by'          => 'by',
            'photos_by'   => 'Photos\'s by',
            'photos_desc' => 'See all the latest pictures taken by',
            'load_more'   => 'View more photos'
        ),
        'community_staff' => array (
            'title'       => 'How do I become staff at ' . Config::site['shortname'] . ' ?',
            'desc'        => 'Our staff is here to help and guide you within this hotel!',
            'content_1'   => 'Of course everyone dreams of being staff at ' . Config::site['shortname'] . ' , but unfortunately this is not for everyone. To become staff at ' . Config::site['shortname'] . '  you must apply.',
            'content_2'   => 'This is only possible at times when we have vacancies, when we have this, this is mentioned in the news.'
        ),
        'community_value' => array (
            'title_header'      => 'Catalogue marketplace',
            'decs_header'       => 'All the exclusive furniture with a value higher than the type \'credits\' can you buy here!',
            'furni_name'        => 'Furniname',
            'furni_type'        => 'Type',
            'furni_costs'       => 'Now',
            'furni_amount'      => 'In game',
            'furni_value'       => 'Old price',
            'furni_rate'        => 'Rate',
            'looking_for'       => 'I\'m looking for..',
            'seller'            => 'Seller',
            'price'             => 'Price',
            'nav_my'            => 'My marketplace',
            'nav_shop'          => 'Marketplace',
            'nav_catalogue'     => 'Catalogue',
            'marketplace_desc'  => 'Sellers of ' . Config::site['shortname'] . ' hotel offer their stuff here that you can pay for with your currencys. Maybe you will find here exclusive items that you normally cannot buy in our catalogue!'
        ),
        /*     App/View/Games     */
        'games_ranking' => array (
            'username' => 'name'
        ),

        /*     App/View/Help     */
        'help' => array (
          /*  Help/help.html  */
            'help_title'                => 'FAQ',
            'help_label'                => '¡Encuentra todas las respuestas sobre tus preguntas aquí!',
            'help_other_questions'      => 'Otras preguntas',
            'help_content_1'            => '¿No encontró la respuesta a su pregunta? No dude en ponerse en contacto con nuestro servicio al cliente para que podamos brindarle más información.',
            'help_contact'              => 'Contacto',
            'title'                     => 'Tickets',
            'desc'                      => 'Puedes buscar aquí las respuestas a tus preguntas. Si no la encuentras enviar una nueva solicitud.',

          /*  Help/request.html  */
            'request_closed'            => 'CLOSED',
            'request_on'                => 'On:',
            'request_ticket_amount'     => 'Amount of tickets:',
            'request_react_on'          => 'React on:',
            'request_react'             => 'React',
            'request_description'       => 'Description',
            'request_react_on_ticket'   => 'React on ticket',
            'request_contact'           => 'Contactar a ' . Config::site['shortname'],
            'request_contact_help'      => 'Puedes contactar con nosotros abriendo un nuevo ticket.',
            'request_new_ticket'        => 'Nuevo ticket',
            'request_subject'           => 'Asunto',
            'request_type'              => 'Type',
            'request_status'            => 'Ticket abierto',
            'request_in_treatment'      => 'En proceso',
            'request_open'              => 'Abierto',
            'request_closed'            => 'Cerrado'
        ),
        'help_new' => array (
            'title'         => 'Mi ticket',
            'subject'       => 'Asunto',
            'description'   => 'Descripción',
            'open_ticket'   => 'Abrir ticket'
        ),

        /*     App/View/Home     */
        'home' => array (
            'to'                      => 'Ingresar a',
            'friends_online'          => 'Amigos conectados',
            'now_in'                  => 'Ahora en',
            'latest_news'             => 'Ultimas Noticias',
            'latest_facts'            => 'Conoce los últimos hechos dentro de ' . Config::site['shortname'],
            'popular_rooms'           => 'Salas Populares',
            'popular_rooms_label'     => 'Sepa qué habitaciones son tendencia dentro de '. Config::site['shortname'],
            'popular_no_rooms'        => 'No hay nadie dentro de nuestro hotel',
            'goto_room'               => 'Ir a la sala',
            'popular_groups'          => 'Grupos Populares',
            'popular_groups_label'    => '¿A quién quieres unirte?',
            'popular_no_groups'       => '¡Aún no se han creado grupos!',
            'load_news'               => 'Cargar más noticias',
            'user_of_the_week'        =>  Config::site['shortname'] . 's de la semana',
            'user_of_the_week_label'  => 'Usuario de la semana'
        ),
        'lost' => array (
            'page_not_found'          => 'Página no encontrada',
            'page_content_1'          => 'Lo sentimos, la página que intentas encontrar no existe.',
            'page_content_2'          => "Verifique nuevamente si tiene la URL correcta. Si vienes aquí de nuevo (bienvenido de nuevo!). Luego, regrese a su lugar de origen con el botón 'Atrás'.",
            'sidebar_title'           => 'Quizás estabas buscando ...',
            'sidebar_stats'           => '¿La casa de una de tus amig@s?',
            'sidebar_stats_label_1'   => 'Tal vez él / ella está en el',
            'sidebar_stats_label_2'   => 'Puntuaciones',
            'sidebar_rooms'           => '¿Salas Populares?',
            'sidebar_rooms_label_1'   => 'Busca por el',
            'sidebar_rooms_label_2'   => 'Navegador',
            'sidebar_else'            => '¡He perdido mis zapatillas!',
            'sidebar_else_label'      => 'Entonces realmente tienes que buscar mejor.'
        ),
        'profile' => array (
            'overlay_search'        => '¿A quién estás buscando?',
            'since'                 => 'desde',
            'currently'             => 'Actualmente',
            'never_online'          => 'Nunca se ha conectado',
            'last_visit'            => 'Última visita',
            'guestbook_title'       => 'Libro de visitas',
            'guestbook_label'       => '¿Quieres dejar un mensaje?',
            'guestbook_input'       => '¿Qué estás haciendo',
            'guestbook_input_1'     => '¿Qué deseas',
            'guestbook_input_2'     => 'saber de mi?',
            'guestbook_load_more'   => 'Cargar más mensajes',
            'badges_title'          => 'Placas',
            'badges_label'          => 'Placas aleatorias que puedo usar',
            'badges_empty'          => 'Todavía no ha configurado ninguna placa',
            'friends_title'         => 'Amigos',
            'friends_label'         => 'Amig@s al azar en mi lista',
            'friends_empty'         => '¿Todavía no has hecho amigos?',
            'groups_title'          => 'Grupos',
            'groups_label'          => '¡Mira lo que amo!',
            'groups_empty'          => 'No te has unido a un grupo todavía',
            'rooms_title'           => 'Salas',
            'rooms_label'           => 'Mis ultimas salas creadas',
            'rooms_empty'           => 'Todavía no ha creado ninguna sala',
            'photos_title'          => 'Fotos',
            'photos_label'          => '¿Tomarás una foto conmigo?',
            'photos_empty'          => 'No ha tomado ninguna foto todavía',
            'title'                 => 'Perfil de'
        ),
        'registration' => array (
            'title'                 => 'Ingresa tu información',
            'email'                 => 'Correo Electrónico',
            'email_fill'            => 'Ingresa tu correo electrónico aquí...',
            'email_help'            => 'Necesitaremos esta información para restaurar su cuenta en caso de que pierda el acceso.',
            'password'              => 'Contraseña',
            'password_fill'         => 'Contraseña',
            'password_repeat'       => 'Repetir contraseña',
            'password_repeat_fill'  => 'Repetir contraseña...',
            'password_help_1'       => 'Su contraseña debe tener al menos 6 caracteres y contener letras y números.',
            'password_help_2'       => '¡Asegúrese de que su contraseña sea diferente a la de otros sitios web!',
            'birthdate'             => 'Fecha de nacimiento',
            'day'                   => 'Día',
            'month'                 => 'Mes',
            'year'                  => 'Año',
            'birthdate_help'        => 'Necesitaremos esta información para restaurar su cuenta en caso de que pierda el acceso.',
            'found'                 => '¿Cómo has encontrado a ' . Config::site['shortname'] . ' Hotel?',
            'found_choose'          => 'Toma una decisión...',
            'found_choose_1'        => 'Google',
            'found_choose_2'        => 'Por un amigo',
            'found_choose_3'        => 'Por otro juego',
            'found_choose_4'        => 'Por Facebook',
            'found_choose_5'        => 'Otro',
            'create_user'           => 'Crea tu ' . Config::site['shortname'] . '!',
            'username'              => '¿Como te llamaras?',
            'username_fill'         =>  Config::site['shortname'] . 'nombre...',
            'username_help'         => 'Tu nombre único en ' . Config::site['shortname'] . ' Hotel.',
            'sex'                   => 'Sexo',
            'male'                  => 'Chico',
            'female'                => 'Niña',
            'register'              => 'Registrarme',
            'header_slogan2'        => 'Únete a nuestra comunidad y haz nuevos amig@s.'
        ),

        /*     App/View/Jobs     */
        'apply' => array (
            'title'               => 'Reaccionar en la factura',
            'content_1'           => 'Gracias por tu interés en ' . Config::site['shortname'] . ' Hotel y por responder a la vacante.',
            'content_2'           => 'Intenta responder el cuestionario con la mayor precisión posible.',
            'description'         => 'Descripción del trabajo',
            'question_name'       => '¿Cuál es tu nombre?',
            'question_age'        => '¿Cuantos años tienes?',
            'question_why'        => '¿Por qué crees que podrías ser adecuad@?',
            'question_time'       => '¿Cuántas horas estás en línea?',
            'question_time_help'  => 'Dinos cuántas horas pasas en línea por día en ' . Config::site['shortname'] . ' Hotel.',
            'monday'              => 'Lunes',
            'tuesday'             => 'Martes',
            'wednesday'           => 'Miercoles',
            'thursday'            => 'Jueves',
            'friday'              => 'Viernes',
            'saturday'            => 'Sabado',
            'sunday'              => 'Domingo',
            'time_to_time'        => 'de X a Y horas',
            'send'                => 'Enviar mi solicitud'
        ),
        'jobs' => array (
            'title'                   => 'Listado de vacantes',
            'applications'            => 'Mis solicitudes',
            'available_applications'  => 'Vacantes disponibles',
            'buildteam'               => 'Equipo de construcción',
            'buildteam_desc'          => 'Son responsables de construir salas (para eventos / oficiales)',
            'react'                   => 'Reaccionar'
        ),

        /*     App/View/Password     */
        'password_claim' => array (
            'title'                 => '¿Olvidaste tu contraseña?',
            'content_1'             => 'Ingresa tu usuario con tu correo electrónico y le enviaremos un enlace por correo electrónico para cambiar su contraseña.',
            'content_2'             => '¡No hagas esto si alguien te pide que lo hagas!',
            'username'              =>  'Usuario',
            'email'                 => 'Correo electrónico',
            'send'                  => 'Enviar correo',
            'wrong_page'            => 'Falsa alarma',
            'wrong_page_content_1'  => 'Si recuerda su contraseña, o terminó aquí por accidente, puede usar el siguiente enlace para volver a la página de inicio.',
            'back_to_home'          => 'Volver a la página de inicio'
        ),
        'password_reset' => array (
            'title'                     => 'Cambiar contraseña',
            'new_password'              => 'Nueva contraseña',
            'new_password_fill'         => 'Introduzca su nueva contraseña...',
            'new_password_repeat_fill'  => 'Re ingrese su contraseña...',
            'change_password'           => 'Cambiar contraseña'
        ),

        /*     App/View/Settings     */
        'settings_panel' => array (
            'preferences'    => 'Mis preferencias',
            'password'       => 'Cambiar contraseña',
            'verification'   => 'Establecer verificación',
            'email'          => 'Cambiar dirección de correo electrónico',
            'namechange'     => 'Cambiar nombre de usuario',
            'shop_history'   => 'Historial de compras'
        ),
        'settings_email' => array (
            'title'           => 'Cambiar correo electrónico',
            'email_title'     => 'Correo electrónico',
            'email_label'     => 'Se requiere su dirección de correo electrónico para restaurar su cuenta en caso de que pierda el acceso.',
            'password_title'  => 'Contraseña actual',
            'fill_password'   => 'Introduce tu contraseña actual...',
            'save'            => 'Guardar'
        ),
        'settings_namechange' => array (
            'title'           => 'Cambiar nombre de usuario',
            'help_1'          => '¿Quieres cambiar tu nombre de usuario? Puedes hacerlo, esto cuesta',
            'help_2'          => 'y se cargará inmediatamente después de su solicitud. ¡Una vez que su nombre ha sido cambiado, no podemos revertirlo! ¡Así que asegúrese de pensar cuidadosamente sobre su decisión!',
            'fill_username'   => 'Nombre de usuario',
            'request'         => 'Solicitar'
        ),
        'settings_password' => array (
            'title'                     => 'Cambiar contraseña',
            'password_title'            => 'Contraseña actual',
            'fill_password'             => 'Introduce tu contraseña actual...',
            'newpassword_title'         => 'Nueva contraseña',
            'fill_newpassword'          => 'Ingrese su nueva contraseña aquí...',
            'fill_newpassword_repeat'   => 'Repite tu nueva contraseña...',
            'help'                      => 'Su contraseña debe tener al menos 6 caracteres y contener letras y números.',
            'save'                      => 'Guardar'
        ),
        'settings_preferences' => array (
            'title'               => 'Mis preferencias',
            'follow_title'        => 'Función de seguimiento: ¿quién puede seguirte?' ,
            'follow_label'        => 'No quiero que me sigan ' . Config::site['shortname'] . 's',
            'friends_title'       => 'Peticiones de amistad',
            'friends_label'       => '¿Permitir solicitudes de amistad?',
            'room_title'          => 'Invitaciones a la sala',
            'room_label'          => 'No quiero ser invitado a salas',
            'hotelalerts_title'   => 'Alertas del hotel',
            'hotelalerts_label'   => 'No quiero recibir notificaciones del hotel',
            'chat_title'          => 'Configuraciones de chat',
            'chat_label'          => 'Quiero usar el viejo chat'
        ),
        'settings_verification' => array (
            'title'                 => 'Asegure su cuenta',
            'help'                  => 'Esta verificación aumenta la seguridad de su cuenta. Cuando inicie sesión, debe, según sus preferencias, responder las preguntas de seguridad que ha definido o ingresar un código generado por su aplicación.',
            'password_title'        => 'Ingresa tu contraseña',
            'auth_title'            => 'Verificación de dos pasos',
            'auth_label'            => 'Asegure su cuenta con la verificación en dos pasos',
            'method_title'          => 'Método de verificación',
            'method_choose'         => 'Elige tu método de verificación ...',
            'method_pincode'        => 'Quiero establecer un código pin',
            'method_auth_app'       => 'Quiero usar Google 2FA',
            'pincode_title'         => 'Seguridad de código PIN',
            'pincode_label'         => 'Coloque un código PIN en su cuenta como seguridad adicional, con esto garantiza una mejor protección de su cuenta contra los piratas informáticos.',
            'fill_pincode'          => 'Ingrese su código PIN',
            'generate_auth'         => 'Generación de código por 2FA',
            'generate_auth_label'   => 'Este método es el más confiable. Vincula tu cuenta ' . Config::site['shortname'] . ' a una aplicación de autenticación (Google Authenticator) en su teléfono. Cuando te registras, todo lo que tienes que hacer es ingresar el código generado por tu aplicación.',
            'link_account'          => 'Vincula tu cuenta',
            'link_account_label'    => 'Para vincular su cuenta, simplemente escanee este código QR con su aplicación y luego haga clic en guardar para validar este cambio.',
            'save'                  => 'Guardar'
        ),

        /*     App/View/Shop     */
        'shop_club' => array (
            'club_benefits'       => 'Beneficios del club',
            'club_buy'            => 'Comprar ' . Config::site['shortname'] . ' Club',
            'unlimited'           => 'Ilimitado',
            'more_information'    => 'Más información',
            'content_1'           => '¿Tiene alguna pregunta o problema con una compra?',
            'content_2'           => 'No dude en ponerse en contacto con el servicio al cliente a través de',
            'help_tool'           => 'Tickets de '. Config::site['shortname'],
            'random_club_users'   => 'Miembros aleatorios de ' . Config::site['shortname'] . ' Club',
            'desc'                => 'Aquí puedes comprar ' . Config::site['shortname'] . ' Club por dinero real. Con Club puedes comprar artículos exclusivos.'
        ),
        'shop_history' => array (
            'buy_history'         => 'Historial de compras',
            'product'             => 'Producto',
            'date'                => 'Fecha',
            'buy_history_empty'   => 'Aún no tienes un historial de compras.',
            'buy_club'            => 'Comprar ' . Config::site['shortname'] . ' Club',
            'content_1'           => '¿Tiene alguna pregunta o problema con una compra?',
            'content_2'           => 'No dude en ponerse en contacto con el servicio al cliente a través de',
            'help_tool'           => 'Tickets de ' . Config::site['shortname'],
            'title'               => 'Mi historial de compras',
            'desc'                => 'Ves aquí todas las compras que has realizado',
            'title_draw'          => 'Dibuja tu placa',
            'draw_desc'           => 'Dibuja tu propia insignia para obtener puntos'
        ),
        'shop_offers' => array (
            'back'              => 'Regresar',
            'buymethods'        => 'Métodos de pago',
            'for'               => 'para',
            'or_lower'          => 'o bajo',
            'loading_methods'   => 'Se están cargando los métodos de pago....',
            'store'             => 'Tienda'
        ),
        'shop' => array (
            'title'             => 'Seleccione un producto',
            'country'           => 'Pais:',
            'netherlands'       => 'Países Bajos',
            'belgium'           => 'Bélgica',
            'super_rare'        => 'Super Rare',
            'more_information'  => 'Más información',
            'content_1'         => '¿Tiene alguna pregunta o problema con una compra?',
            'content_2'         => 'No dude en ponerse en contacto con el servicio al cliente a través de',
            'help_tool'         => 'Tickets de ' . Config::site['shortname'],
            'not_logged'        => '¡Uy! No has iniciado sesión.',
            'have_to_login'     => 'Debe iniciar sesión para visitar la ' . Config::site['shortname'] . ' Tienda.',
            'click_here'        => 'Haga clic aquí',
            'to_login'          => 'Iniciar sesión',
            'store'             => 'Tienda',
            'desc'              => 'Aquí puedes comprar créditos por dinero real, con esto puedes comprar artículos exclusivos en nuestro catálogo'
        ),
        'games_ranking' => array(
            'title'             => 'Puntuaciones',
            'desc'              => '¡Aqui encontrarás todas las puntuaciones más altas de nuestr@s jugador@s!'
        )
    ),
    'core' => array (
        'belcredits' => 'GOTW-Points',
        'hotelapi' => array (
            'disabled' => '¡No se puede procesar la solicitud porque el hotelapi está apagado!'
        ),
        'dialog' => array (
            'logged_in'             => '¡Vaya para visitar esta página, debe iniciar sesión!',
            'not_logged_in'         => '¡No es necesario iniciar sesión para visitar esta página!'
        ),
        'notification' => array (
            'message_placed'        => 'Your message has been posted!',
            'message_deleted'       => 'Your message has been deleted!',
            'invisible'             => 'This is made invisible!',
            'profile_invisible'     => 'This ' . Config::site['shortname'] . ' has made his/her profile invisible.',
            'profile_notfound'      => 'Unfortunately.. we could not find the ' . Config::site['shortname'] . '!',
            'no_permissions'        => 'You do not have permission.',
            'already_liked'         => 'You already like this!',
            'liked'                 => 'You like this!',
            'banned_1'              => 'You have been banned for breaking the ' . Config::site['shortname'] . ' Rules:',
            'banned_2'              => 'Your ban expires:',
            'something_wrong'       => 'Something went wrong, please try again.',
            'room_not_exists'       => 'This room does not exist!',
            'staff_received'        => 'Thanks! The ' . Config::site['shortname'] . ' Staff has received this!',
            'not_enough_belcredits' => 'You do not have enough gotwpoints.',
            'not_enough_points'     => 'You do not have enough points.',
            'topic_closed'          => 'You cannot respond to a topic that has been closed!',
            'post_not_allowed'      => 'You don\'t have access to create a post in this forum!',
            'draw_badge_uploaded'   => 'Your badge has been submitted and is ready for review!'
        ),
        'pattern' => array (
            'can_be'                => 'may maximum',
            'must_be'               => 'must be minimal',
            'characters_long'       => 'characters long.',
            'invalid'               => 'does not meet the requirements!',
            'invalid_characters'    => 'contains invalid characters!',
            'is_required'           => 'Fill out all fields!',
            'not_same'              => 'does not match',
            'captcha'               => 'Recaptcha was entered incorrectly!',
            'numeric'               => 'must be numeric!',
            'email'                 => 'is not valid!'
        ),
        'title' => array (
            'home'              => '¡Haz amig@s, juega, haz habitaciones y destaca!',
            'lost'              => '¡Página no encontrada!',
            'registration'      => '¡Registrate gratis!',
            'hotel'             => 'Hotel',

            'password' => array (
                'claim'    => '¿Se te olvidó tu contraseña?',
                'reset'    => 'Cambia la contraseña',
            ),
            'settings' => array (
                'index'         => 'Mis preferencias',
                'password'      => 'Cambiar contraseña',
                'email'         => 'Cambiar e-mail',
                'namechange'    => 'Cambiar nombre de usuario'
            ),
            'community' => array (
                'index'     => 'Comunidad',
                'photos'    => 'Fotos',
                'staff'     =>  Config::site['shortname'] . ' Staff',
                'team'      =>  Config::site['shortname'] . ' Team',
                'fansites'  => 'Fansites',
                'value'     => 'Catalogue Marketplace',
                'forum'     => 'My Guilds'
            ),
            'games' => array (
                'ranking'   => 'Puntuaciones'
            ),
            'shop' => array (
                'index'     =>  Config::site['shortname'] . ' Store',
                'history'   => 'Historial de compras',
                'club'      =>  Config::site['shortname'] . ' Club'
            ),
            'help' => array (
                'index'     => 'Ayuda',
                'requests'  => 'Tickets',
                'new'       => 'Nuevo Ticket'
            ),
            'jobs' => array (
                'index'     => 'Vacantes',
                'apply'     => 'Responder a Vacante'
            )
        )
    ),
    'login' => array (
        'invalid_password'          => 'Contraseña invalida.',
        'invalid_pincode'           => 'Este código pin no coincide con el de ' . Config::site['shortname'],
        'fill_in_pincode'           => 'Ingrese su código PIN ahora para obtener acceso a su cuenta'
    ),
    'register' => array (
        'username_invalid'          =>  Config::site['shortname'] . 'name is contrary to the ' . Config::site['shortname'] . ' Rules.',
        'username_exists'           =>  Config::site['shortname'] . 'name is already in use :-(',
        'email_exists'              =>  'This e-mail address is already in use :-(',
        'too_many_accounts'         => 'There are too many accounts registered on this ip :-('
    ),
    'claim' => array (
        'invalid_email'             => 'This e-mail address does not match that of this ' . Config::site['shortname'] . ' ID.',
        'invalid_link'              => 'This link has expired. Request your password again to change your password.',
        'send_link'                 => 'We have just sent you an e-mail! Received nothing? Then check the junk e-mail folder.',
        'password_changed'          => 'Your password has been changed. You can now log in again!',

        'email'  => array (
            'title'                 => 'Change your password.'
        )
    ),
    'settings' => array (
        'email_saved'               => 'Your e-mail address has been changed.',
        'pincode_saved'             => 'Your pin code has been saved, you will have to log in again. See you soon! :)',
        'password_saved'            => 'Your password has been changed. You will now have to log in again. See you soon! :)',
        'preferences_saved'         => 'Your preferences have been saved!',
        'current_password_invalid'  => 'Current password does not match that of your ' . Config::site['shortname'] . ' ID.',
        'choose_new_username'       => 'Enter a new ' . Config::site['shortname'] . 'name.',
        'choose_new_pincode'        => 'Enter a new pin code.',
        'user_is_active'            => 'This ' . Config::site['shortname'] . ' may still be active!',
        'user_not_exists'           => 'This ' . Config::site['shortname'] . 'name is available and does not exist yet!',
        'name_change_saved'         => 'Your application will be processed, 50 gotw-points have been debited.',
        'invalid_secretcode'        => 'Google Authentication secret code is incorrect.',
        'enabled_secretcode'        => 'Authentication method set! You will have to log in again... see you soon!',
        'disabled_secretcode'       => 'Authentication method disabled!'
    ),
    'shop' => array (
        'offers' => array (
            'invalid_transaction'   => 'Transaction could not be processed!',
            'invalid_code'          => 'The code you entered is incorrect.',
            'success_1'             => 'Thank you for your purchase! You have received',
            'success_2'             => 'gotw-points.'
        ),
        'club' => array (
            'already_vip'           => 'You are an unlimited member of the ' . Config::site['shortname'] . ' Club.',
            'purchase_success'      => 'Yeah! You are now a member of the ' . Config::site['shortname'] . ' Club for 31 days.'

        ),
        'marketplace' => array(
            'expired'               => 'Item is expired, its not possible to purchase this item!',
            'purchased'             => 'Item is succesfull purchased and is now added to your inventory',
            'regards'               => 'Your item has been arrived! Friendly regards from ' . Config::site['shortname']
        )
    ),
    'help' => array (
        'ticket_created'            => 'Your Help Ticket has been created. View your Help Tickets to view the help request.',
        'ticket_received'           => 'An ' . Config::site['shortname'] . ' Staff has responded to your Help Tool ticket. Visit the Help Tool to view the response.',
        'already_open'              => 'You still have an outstanding ticket! When this has been treated you can create a ticket again.',
        'no_answer_yet'             => 'You can only respond once an ' . Config::site['shortname'] . ' Staff has answered your ticket.',
    ),
    'forum' => array (
        'is_sticky'                 => 'Sticky updated!',
        'is_closed'                 => 'Topic status changed!'
    ),

    /*     Housekeeping     */
    'housekeeping' => array (
        'base' => array(
            'dashboard_header_title'    => 'Administración'
        ),
        'javascript' => array(
            'dashboard_table_username'  => 'Username'
        )
    )
);
