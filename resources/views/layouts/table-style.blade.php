<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<style>
    select{
        padding-right: 30px !important;
    }

    table{
        padding-top: 15px  !important;
    }

    .btn-create{
        background-color: #5ed5a3; 
        border: none;
        border-radius: 10%;
        color: white;
        margin-bottom:10px; 
        padding: 7px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    .btn-editar{
        background-color: #747ba7; 
        border: none;
        border-radius: 10%;
        color: white;

        padding: 7px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    
    .btn-borrar{
        background-color: #c13434 !important; 
        border: none;
        border-radius: 10%;
        color: white;

        padding: 7px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    td{
        padding-top: 5px !important;
        padding-bottom: 0% !important;
    }
</style>

@yield('contenido')


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

@yield('js')




