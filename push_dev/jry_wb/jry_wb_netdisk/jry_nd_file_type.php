<?php
function jry_nd_get_content_type($type)
{
	$type=strtolower($type);
	if($type=='rss')			return 'application/xml';
	else if($type=='ez')		return 'application/andrew-inset';
	else if($type=='hqx')		return 'application/mac-binhex40';
	else if($type=='cpt')		return 'application/mac-compactpro';
	else if($type=='doc')		return 'application/msword';
	else if($type=='bin')		return 'application/octet-stream';
	else if($type=='dms')		return 'application/octet-stream';
	else if($type=='lha')		return 'application/octet-stream';
	else if($type=='lzh')		return 'application/octet-stream';
	else if($type=='exe')		return 'application/octet-stream';
	else if($type=='class')		return 'application/octet-stream';
	else if($type=='so')		return 'application/octet-stream';
	else if($type=='dll')		return 'application/octet-stream';
	else if($type=='oda')		return 'application/oda';
	else if($type=='pdf')		return 'application/pdf';
	else if($type=='ai')		return 'application/postscript';
	else if($type=='eps')		return 'application/postscript';
	else if($type=='ps')		return 'application/postscript';
	else if($type=='smi')		return 'application/smil';
	else if($type=='smil')		return 'application/smil';
	else if($type=='mif')		return 'application/vnd.mif';
	else if($type=='xls')		return 'application/vnd.ms-excel';
	else if($type=='ppt')		return 'application/vnd.ms-powerpoint';
	else if($type=='wbxml')		return 'application/vnd.wap.wbxml';
	else if($type=='wmlc')		return 'application/vnd.wap.wmlc';
	else if($type=='wmlsc')		return 'application/vnd.wap.wmlscriptc';
	else if($type=='bcpio')		return 'application/x-bcpio';
	else if($type=='vcd')		return 'application/x-cdlink';
	else if($type=='pgn')		return 'application/x-chess-pgn';
	else if($type=='cpio')		return 'application/x-cpio';
	else if($type=='csh')		return 'application/x-csh';
	else if($type=='dcr')		return 'application/x-director';
	else if($type=='dir')		return 'application/x-director';
	else if($type=='dxr')		return 'application/x-director';
	else if($type=='dvi')		return 'application/x-dvi';
	else if($type=='spl')		return 'application/x-futuresplash';
	else if($type=='gtar')		return 'application/x-gtar';
	else if($type=='hdf')		return 'application/x-hdf';
	else if($type=='js')		return 'application/x-javascript';
	else if($type=='skp')		return 'application/x-koan';
	else if($type=='skd')		return 'application/x-koan';
	else if($type=='skt')		return 'application/x-koan';
	else if($type=='skm')		return 'application/x-koan';
	else if($type=='latex')		return 'application/x-latex';
	else if($type=='nc')		return 'application/x-netcdf';
	else if($type=='cdf')		return 'application/x-netcdf';
	else if($type=='sh')		return 'application/x-sh';
	else if($type=='shar')		return 'application/x-shar';
	else if($type=='swf')		return 'application/x-shockwave-flash';
	else if($type=='sit')		return 'application/x-stuffit';
	else if($type=='sv4cpio')	return 'application/x-sv4cpio';
	else if($type=='sv4crc')	return 'application/x-sv4crc';
	else if($type=='tar')		return 'application/x-tar';
	else if($type=='tcl')		return 'application/x-tcl';
	else if($type=='tex')		return 'application/x-tex';
	else if($type=='texinfo')	return 'application/x-texinfo';
	else if($type=='texi')		return 'application/x-texinfo';
	else if($type=='t')			return 'application/x-troff';
	else if($type=='tr')		return 'application/x-troff';
	else if($type=='roff')		return 'application/x-troff';
	else if($type=='man')		return 'application/x-troff-man';
	else if($type=='me')		return 'application/x-troff-me';
	else if($type=='ms')		return 'application/x-troff-ms';
	else if($type=='ustar')		return 'application/x-ustar';
	else if($type=='src')		return 'application/x-wais-source';
	else if($type=='xhtml')		return 'application/xhtml+xml';
	else if($type=='xht')		return 'application/xhtml+xml';
	else if($type=='zip')		return 'application/zip';
	else if($type=='au')		return 'audio/basic';
	else if($type=='snd')		return 'audio/basic';
	else if($type=='mid')		return 'audio/midi';
	else if($type=='midi')		return 'audio/midi';
	else if($type=='kar')		return 'audio/midi';
	else if($type=='mpga')		return 'audio/mpeg';
	else if($type=='mp2')		return 'audio/mp2';
	else if($type=='mp3')		return 'audio/mp3';
	else if($type=='aif')		return 'audio/x-aiff';
	else if($type=='aiff')		return 'audio/x-aiff';
	else if($type=='aifc')		return 'audio/x-aiff';
	else if($type=='m3u')		return 'audio/x-mpegurl';
	else if($type=='ram')		return 'audio/x-pn-realaudio';
	else if($type=='rm')		return 'audio/x-pn-realaudio';
	else if($type=='rpm')		return 'audio/x-pn-realaudio-plugin';
	else if($type=='ra')		return 'audio/x-realaudio';
	else if($type=='wav')		return 'audio/x-wav';
	else if($type=='pdb')		return 'chemical/x-pdb';
	else if($type=='xyz')		return 'chemical/x-xyz';
	else if($type=='bmp')		return 'image/bmp';
	else if($type=='gif')		return 'image/gif';
	else if($type=='gif')		return 'image/gif';
	else if($type=='ief')		return 'image/ief';
	else if($type=='jpeg')		return 'image/jpeg';
	else if($type=='jpg')		return 'image/jpeg';
	else if($type=='jpe')		return 'image/jpeg';
	else if($type=='png')		return 'image/png';
	else if($type=='tiff')		return 'image/tiff';
	else if($type=='tif')		return 'image/tif';	
	else if($type=='djvu')		return 'image/vnd.djvu';
	else if($type=='djv')		return 'image/vnd.djvu';
	else if($type=='wbmp')		return 'image/vnd.wap.wbmp';
	else if($type=='ras')		return 'image/x-cmu-raster';
	else if($type=='pnm')		return 'image/x-portable-anymap';
	else if($type=='pbm')		return 'image/x-portable-bitmap';
	else if($type=='pgm')		return 'image/x-portable-graymap';
	else if($type=='ppm')		return 'image/x-portable-pixmap';
	else if($type=='rgb')		return 'image/x-rgb';
	else if($type=='xbm')		return 'image/x-xbitmap';
	else if($type=='xpm')		return 'image/x-xpixmap';
	else if($type=='xwd')		return 'image/x-xwindowdump';
	else if($type=='igs')		return 'model/iges';
	else if($type=='iges')		return 'model/iges';
	else if($type=='msh')		return 'model/mesh';
	else if($type=='mesh')		return 'model/mesh';
	else if($type=='silo')		return 'model/mesh';
	else if($type=='wrl')		return 'model/vrml';
	else if($type=='vrml')		return 'model/vrml';
	else if($type=='css')		return 'text/css';	
	else if($type=='html')		return 'text/html';
	else if($type=='htm')		return 'text/html';
	else if($type=='asc')		return 'text/plain';
	else if($type=='txt')		return 'text/plain';
	else if($type=='in')		return 'text/plain';
	else if($type=='out')		return 'text/plain';
	else if($type=='rtx')		return 'text/richtext';
	else if($type=='rtf')		return 'text/rtf';
	else if($type=='sgml')		return 'text/sgml';
	else if($type=='sgm')		return 'text/sgml';
	else if($type=='tsv')		return 'text/tab-separated-values';
	else if($type=='wml')		return 'text/vnd.wap.wml';
	else if($type=='wmls')		return 'text/vnd.wap.wmlscript';
	else if($type=='etx')		return 'text/x-setext';
	else if($type=='xsl')		return 'text/xml';
	else if($type=='xml')		return 'text/xml';
	else if($type=='mpeg')		return 'video/mpeg';
	else if($type=='mpg')		return 'video/mpeg';
	else if($type=='mpe')		return 'video/mpeg';
	else if($type=='flv')		return 'video/x-flv';
	else if($type=='qt')		return 'video/quicktime';
	else if($type=='mov')		return 'video/quicktime';
	else if($type=='mxu')		return 'video/vnd.mpegurl';
	else if($type=='avi')		return 'video/x-msvideo';
	else if($type=='movie')		return 'video/x-sgi-movie';
	else if($type=='ice')		return 'x-conference/x-cooltalk';
	else 						return 'text/plain';
}
function jry_nd_is_multimedia($type)
{
	$type=strtolower($type);
	if($type=='mp4'||$type=='mp3')
		return true;
	return false;
}