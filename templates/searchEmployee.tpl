{if $employee}
    <div class="alert alert-success" role="alert">
    {$employee->getFullName()}&nbsp&nbsp&nbspEdad:&nbsp{$employee->getAge()}&nbsp&nbsp&nbspTipo:&nbsp{$employee->getTypeSpecialty()->getEmployeeType()->getName()} - {$employee->getTypeSpecialty()->getName()}
    </div>
{else}
    <div class="alert alert-warning" role="alert">
    No se encontro ningun empleado.
    </div>
{/if}