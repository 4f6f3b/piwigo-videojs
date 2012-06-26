<?php  
$lang['submit'] = 'Validar';
$lang['Title'] = 'VideoJS';
$lang['Howto'] = 'Este plugin agrega reproductor de v�deo HTML5.';
$lang['Howto2'] = 'Paso a paso de demostraci�n:<br/>
* Crear un nuevo �lbum (MyVideoClip) a trav�s del panel de administraci�n o directamente en el directorio de sus galer�as.
* Descarga y ipload tanto el archivo en el disco nuevo (eg: galleries/MyVideoClip):
* El cartel, http://video-js.zencoder.com/oceans-clip.jpg
* El video, http://video-js.zencoder.com/oceans-clip.mp4
* Cambiar el nombre de la imagen del p�ster de 'oceans-clip.jpg.poster', de esta manera no se manejan como una imagen.
* Sincronizar
';

$lang['Howto3'] = 'Descripci�n completa:<br/>
* El video debe ser un formato de apoyo y no debe contener espacios ni caracteres especiales.
* El cartel debe tener el mismo tama�o del video y se debe terminar par \'.poster\'
* El tama�o de v�deo original se mantenga siempre que est� por debajo de ancho 720px.
Si el v�deo es HDReady (1280*720) o FullHD (1920*1080), el v�deo ser� la escala a trav�s de una f�rmula matem�tica impresionante (se divide por 2).
La resoluci�n de pantalla de HDReady ser� 640*360 y 960*540 par el FullHD.';

$lang['Howto3'] = 'Nota independiente del plugin o Piwigo:

* Aseg�rese de que su servidor est� utilizando los tipos MIME correctos. Firefox no se reproducir� el v�deo Ogg si el tipo MIME que est� mal. Coloque estas l�neas en el archivo. Htaccess en el directorio ra�z (Piwigo) para enviar los tipos MIME correctos a los navegadores

AddType video/ogg  .ogv
AddType video/mp4  .mp4
AddType video/webm .webm

* Algunos servidores de Internet, para tratar de ahorrar ancho de banda, todo lo que gzip por defecto, incluyendo los archivos de v�deo! En Firefox y Opera, en busca de no ser posible o el v�deo no puede reproducirse en absoluto si es un archivo de v�deo comprimido con gzip. Si esto est� ocurriendo a usted por favor compruebe que su servidor / hosts y deshabilitar el gzipping de Ogg y otros archivos multimedia. Puede optar por desactivar gzipping para archivos de v�deo en su htaccess mediante la adici�n de esta l�nea.:

SetEnvIfNoCase Request_URI \.(og[gv]|mp4|m4v|webm)$ no-gzip dont-vary';

$lang['vjs_pref'] = 'VideoJS preferencias';
$lang['vjs_pref2'] = 'Plugin preferencias';

$lang['skin'] = 'Skin';
$lang['preload'] = 'Preload';
$lang['controls'] = 'Controls';
$lang['autoplay'] = 'Autoplay';
$lang['loop'] = 'Loop';
$lang['width'] = 'Max Width';

?>
