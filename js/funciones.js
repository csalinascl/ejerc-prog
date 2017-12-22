function soloLetras(e)
{
   key = e.keyCode || e.which;
   tecla = String.fromCharCode(key).toLowerCase();
   letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
   tecla_especial = false;
   	if(letras.indexOf(tecla)==-1 && !tecla_especial)
	{
		return false;
	}
}

function soloNumeros(e)
{
	tecla = (document.all) ? e.keyCode : e.which; 
	if (tecla==8) return true; 
	patron =/^[0-9.]+$/;//este acepta punto(.), si se quiere eliminar borrar el punto despues del 9. 
	te = String.fromCharCode(tecla); 
	return patron.test(te);
}

function enviar()
{
    n1=document.getElementById('n1').value;
    n2=document.getElementById('n2').value;
    if(n1!='' && n2!='')
    {
        document.getElementById('form1').submit();
    }
    else{
        alert("Debe ingresar todos los campos");
    }
}


