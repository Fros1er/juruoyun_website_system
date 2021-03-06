function jry_wb_nd_get_size(size)
{
	if(size<1)
		return (size*1024).toFixed(2)+'B';
	if(size<1024)
		return parseFloat(size).toFixed(2)+'KB';
	else if(size<1024*1024)
		return (size/1024).toFixed(2)+'MB';
	else if(size<1024*1024*1024)
		return (size/1024/1024).toFixed(2)+'GB';
	else if(size<1024*1024*1024*1024)
		return (size/1024/1024/1024).toFixed(2)+'TB';
	else
		return (size/1024/1024/1024/1024).toFixed(2)+'PB';
	
}
function get_dir(i)
{
	if(typeof i=='undefined')
		return '/';	
	if(typeof i=='object')
		var data=i;
	else
		var data=jry_nd_file_list[i];
	if(data==null)
		return '/';
	if(typeof data.dir=='undefined'||data.dir=='')
	{
		var father=jry_nd_file_list.find(function(a){return a.file_id==data.father});
		if(father==null)
			return data.dir='/';
		return data.dir=get_dir(father)+father.name+'/';
	}
	else
		return data.dir;
}