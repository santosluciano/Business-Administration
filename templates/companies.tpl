<h1 class="text-center">Listado de empresas</h1>
<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col" colspan="2">Nombre</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$companies item=company}
        <tr>
            <th scope="row">{$company->getId()}</th>
            <td>{$company->getName()}</td>
            <td></td>
            <td><button type="button" class="btn btn-primary btn-company" data-id="{$company->getId()}" data-companyname="{$company->getName()}">Gestionar empresa</button></td>
        </tr>
        {/foreach}
    </tbody>
</table>
