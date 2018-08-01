ENVIRONMENT='production';
APP_PATH='portfolio';

asset_path= function (filename, dir) {
    if(ENVIRONMENT=='development'){
        rel_url= 'dist/'+dir;
        return APP_PATH+'/'+rel_url+'/'+filename;
    }else if(ENVIRONMENT=='production'){
        rel_url= 'build/'+dir;
        return APP_PATH+'/'+rel_url+'/'+filename+'?v='+version_code('version');
    }
}



version_code=function readFile(file)
{
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    var value;
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                value= allText;
            }
        }
    }
    rawFile.send(null);
    return value;
}

