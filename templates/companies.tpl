{foreach from=$companies item=company}
    {$company->getId()} - {$company->getName()}
{/foreach}