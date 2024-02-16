function triggerClick()
{
    document.querySelector('#profilImage').click();
}

function displayImage(e)
{
    if (e.files[0])
    {
        var reader = new FileReader();

        reader.onload = function(e)
        {
            document.querySelector('#profilDisplay').setAttribute('src', e.target.result);
        };
        reader.readAsDataURL(e.files[0]);
    }
}

function ktpClick()
{
    document.querySelector('#ktpFile').click();
}

function displayKtp(e)
{
    if (e.files[0].size > 2500000)
    {
        alert("Maaf. File Terlalu Besar ! Maksimal Upload 2.5 MB");
        e.value = "";
    } else {
        if(e.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e)
            {
                document.querySelector('#ktpDisplay').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(e.files[0]);
        }
    }
}

function aktaClick()
{
    document.querySelector('#aktaFile').click();
}

function displayAkta(e)
{
    if (e.files[0].size > 2500000)
    {
        alert("Maaf. File Terlalu Besar ! Maksimal Upload 2.5 MB");
        e.value = "";
    } else {
        if(e.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e)
            {
                document.querySelector('#aktaDisplay').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(e.files[0]);
        }
    }
}

function kkClick()
{
    document.querySelector('#kkFile').click();
}

function displayKk(e)
{
    if (e.files[0].size > 2500000)
    {
        alert("Maaf. File Terlalu Besar ! Maksimal Upload 2.5 MB");
        e.value = "";
    } else {
        if(e.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e)
            {
                document.querySelector('#kkDisplay').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(e.files[0]);
        }
    }
}

function ijazahClick()
{
    document.querySelector('#ijazahFile').click();
}

function displayIjazah(e)
{
    if (e.files[0].size > 2500000)
    {
        alert("Maaf. File Terlalu Besar ! Maksimal Upload 2.5 MB");
        e.value = "";
    } else {
        if(e.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e)
            {
                document.querySelector('#ijazahDisplay').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(e.files[0]);
        }
    }
}

function fotoClick()
{
    document.querySelector('#fotoFile').click();
}

function displayFoto(e)
{
    if (e.files[0].size > 2500000)
    {
        alert("Maaf. File Terlalu Besar ! Maksimal Upload 2.5 MB");
        e.value = "";
    } else {
        if(e.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e)
            {
                document.querySelector('#fotoDisplay').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(e.files[0]);
        }
    }
}

function sktmClick()
{
    document.querySelector('#sktmFile').click();
}

function displaySktm(e)
{
    if (e.files[0].size > 2500000)
    {
        alert("Maaf. File Terlalu Besar ! Maksimal Upload 2.5 MB");
        e.value = "";
    } else {
        if(e.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e)
            {
                document.querySelector('#sktmDisplay').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(e.files[0]);
        }
    }
}

function kipClick()
{
    document.querySelector('#kipFile').click();
}

function displayKip(e)
{
    if (e.files[0].size > 2500000)
    {
        alert("Maaf. File Terlalu Besar ! Maksimal Upload 2.5 MB");
        e.value = "";
    } else {
        if(e.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e)
            {
                document.querySelector('#kipDisplay').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(e.files[0]);
        }
    }
}

function pkhClick()
{
    document.querySelector('#pkhFile').click();
}

function displayPkh(e)
{
    if (e.files[0].size > 2500000)
    {
        alert("Maaf. File Terlalu Besar ! Maksimal Upload 2.5 MB");
        e.value = "";
    } else {
        if(e.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e)
            {
                document.querySelector('#pkhDisplay').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(e.files[0]);
        }
    }
}

function kksClick()
{
    document.querySelector('#kksFile').click();
}

function displayKks(e)
{
    if (e.files[0].size > 2500000)
    {
        alert("Maaf. File Terlalu Besar ! Maksimal Upload 2.5 MB");
        e.value = "";
    } else {
        if(e.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e)
            {
                document.querySelector('#kksDisplay').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(e.files[0]);
        }
    }
}

function buktiClick()
{
    document.querySelector('#buktiFile').click();
}

function displayBukti(e)
{
    if (e.files[0].size > 2500000)
    {
        alert("Maaf. File Terlalu Besar ! Maksimal Upload 2.5 MB");
        e.value = "";
    } else {
        if(e.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e)
            {
                document.querySelector('#buktiDisplay').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(e.files[0]);
        }
    }
}