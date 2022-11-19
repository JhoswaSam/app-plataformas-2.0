<style>
     .btn-guardar{
        background-color: #747ba7 !important; 
        border-radius: 4%;
        color: white;
        margin-top: 15px;
        padding: 7px 15%;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }


    
    .btn-cancelar{
        background-color: #c13434 !important; 
        border-radius: 4px;
        color: white;
        margin-top: 15px;
        padding: 7px 15%;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }


    label {
    margin-bottom: 10px;
    }

    .grid--50-50 {
    display: grid;
    grid-template-columns: 50% 50%;
    align-items: center;
    }

    .field input {
    font-size: 16px;
    line-height: 28px;
    padding: 8px 16px;
    width: 100%;
    min-height: 44px;
    border: unset;
    border-radius: 4px;
    outline-color: rgb(84 105 212 / 0.5);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px;
    }

    .field select {
    font-size: 16px;
    line-height: 28px;
    padding: 8px 16px;
    width: 100%;
    min-height: 44px;
    border: unset;
    border-radius: 4px;
    outline-color: rgb(84 105 212 / 0.5);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px;
    }

    .formbg {
    margin: 0px auto;
    width: 100%;
    max-width: 448px;
    }
    .padding-horizontal--48 {
    padding: 48px;
    }
    .padding-bottom--24 {
    padding-bottom: 24px;
    }
    .reset-pass a,
    label {
    font-size: 14px;
    font-weight: 600;
    display: block;
    }
    .reset-pass > a {
    text-align: right;
    margin-bottom: 10px;
    }




</style>


@yield('contenido')