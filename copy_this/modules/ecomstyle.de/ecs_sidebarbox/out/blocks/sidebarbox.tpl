[{assign var="oConf" value=$oViewConf->getConfig()}]
[{assign var="sidebarbox" value=$oConf->getConfigParam('ecs_sbb_ident') }]
            
[{if $oView->getClassName()!='start'}]
    [{$smarty.block.parent}]
[{/if}]



    <div class="box"> 
        <h3>[{$oConf->getConfigParam('ecs_sbb_title') }]</h3>   
        <div class="content">
             <span>
                [{$oConf->getConfigParam('ecs_sbb_text') }]
            </span>
            <span>
                [{oxifcontent ident=$sidebarbox object="oCont"}][{$oCont->oxcontents__oxcontent->value}][{/oxifcontent}]
            </span>
        </div>
    </div>



[{if $oView->getClassName()=='start'}]
    [{$smarty.block.parent}]
[{/if}]