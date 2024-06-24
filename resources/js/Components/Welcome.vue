<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>        
        <SPAn style="color: #000;"><H1>HOLA MUNDO</H1></SPAn>

        <table >
            <tr>
                <th>Nro solicitud</th>
                <th>Descripcion</th>
                <th>Salón</th>
                <th>De</th>
                <th>Hasta</th>
                <th>Detalles</th>
            </tr>
            <tr>
                <td>647</td>
                <td>REUNION VIRTUAL PLATAFORMA </td>
                <td>Salon Paititi - el dorado</td>
                <td>17/09/2024 07:20:25</td>
                <td>17/09/2024 07:20:25</td>
                <td><button >Detalles</button></td>
            </tr>
            <tr>
                <td>648</td>
                <td>REUNION VIRTUAL PLATAFORMA </td>
                <td>Salon Paititi - el dorado</td>
                <td>17/09/2024 07:20:25</td>
                <td>17/09/2024 07:20:25</td>
                <td><button >Detalles</button></td>
            </tr>
            <tr>
                <td>649</td>
                <td>REUNION VIRTUAL PLATAFORMA </td>
                <td>Salon Paititi - el dorado</td>
                <td>17/09/2024 07:20:25</td>
                <td>17/09/2024 07:20:25</td>
                <td><button >Detalles</button></td>
            </tr>
        </table>

        <SPAn style="color: #000;">{{ $page.props }}</SPAn>
        <br />
        <button v-if="$page.props.user.permissions.includes('create roles')">Crear roles</button>
        <button v-if="$page.props.user.permissions.includes('create solicitudes')">Crear nueva solicitud</button>
    
    </div>
</template>

<style>
button {
    background-color:green;
    color: white;
    padding: 20 px;
    margin: 5px;
}

table {
  border: red 5px solid;
}
tbody {
  border: blue 5px solid
}
tr {
  border: green 5px solid;
}
td {
  border: orange 5px solid;
}
</style>