[{*
/*    Please retain this copyright header in all versions of the software
 *
 *    Copyright (C) 2014  Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}.
 */
*}]
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