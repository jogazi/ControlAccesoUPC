@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Comparacion de archivos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input  type="hidden" name="hidden" value="{{ Auth::user()->email }}" />
                        <table class="table">
                        <tr>
                            <th>Archivo 1</th>
                            <td>
                                <input required type="file" id="archivoInput" class="form-control-file" onchange="return validarExt()" name="archivo1" />
                            </td>
                            <td>
                                <div id="visorArchivo">
                                    <!--Aqui se desplegará el fichero-->
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Archivo 2</th>
                            <td>
                                <input required type="file" id="archivoInput2" class="form-control-file" onchange="return validarExt2()" name="archivo2" />
                            </td>
                            <td>
                                <div id="visorArchivo2">
                                    <!--Aqui se desplegará el fichero-->
                                </div>
                            </td>
                        </tr>
                        </table>
                        <button>Comparar Archivos</button>
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

function validarExt()
{
    var archivoInput = document.getElementById('archivoInput');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.txt|.csv)$/i;
    if(!extPermitidas.exec(archivoRuta)){
        alert('Asegurese de haber seleccionado un archivo txt o csv');
        archivoInput.value = '';
        return false;
    }

    else
    {
        //PRevio del PDF
        if (archivoInput.files && archivoInput.files[0]) 
        {
            var visor = new FileReader();
            visor.onload = function(e) 
            {
                document.getElementById('visorArchivo').innerHTML = 
                '<embed src="'+e.target.result+'" width="100%" height="100%" />';
            };
            visor.readAsDataURL(archivoInput.files[0]);
        }
    }
}

function validarExt2()
{
    var archivoInput2 = document.getElementById('archivoInput2');
    var archivoRuta2 = archivoInput2.value;
    var extPermitidas2 = /(.txt|.csv)$/i;
    if(!extPermitidas2.exec(archivoRuta2)){
        alert('Asegurese de haber seleccionado un archivo txt o csv');
        archivoInput2.value = '';
        return false;
    }

    else
    {
        //PRevio del PDF
        if (archivoInput2.files && archivoInput2.files[0]) 
        {
            var visor2 = new FileReader();
            visor2.onload = function(e) 
            {
                document.getElementById('visorArchivo2').innerHTML = 
                '<embed src="'+e.target.result+'" width="100%" height="100%" />';
            };
            visor2.readAsDataURL(archivoInput2.files[0]);
        }
    }
}
</script>
@endsection
