{*
/*
* Script: consulting.tpl
* 	 Consulting invoice type template
*
* License:
*	 GPL v3 or above
*
* Website:
*	https://simpleinvoices.group
*/
*}
<form name="frmpost" method="POST" id="frmpost"
      action="index.php?module=invoices&amp;view=save">
    <h3>{$LANG.inv} {$LANG.inv_consulting}
        <div id="gmail_loading" class="gmailLoader" style="float:right; display: none;">
            <img src="../../../images/gmail-loader.gif" alt="{$LANG.loading} ..."/> {$LANG.loading} ...
        </div>
    </h3>
    {include file="$path/header.tpl" }
    <tr>
        <td class="details_screen">{$LANG.quantity}</td>
        <td class="details_screen">{$LANG.description}</td>
        <td class="details_screen">{$LANG.unit_price}</td>
    </tr>
    {section name=line start=0 loop=$dynamic_line_items step=1}
        <tr>
            <td><input type="text" id="quantity{$smarty.section.line.index|htmlsafe}"
                       {if $smarty.section.line.index == 0}class="validate[required,min[.01],custom[number]]"{/if}
                       name="quantity{$smarty.section.line.index|htmlsafe}" size="5"/></td>
            </td>
            <td><input type="text" name="description{$smarty.section.line.index|htmlsafe}" size="50"/>
                {if !isset($products) }
                    <p><em>{$LANG.no_products}</em></p>
                {else}
                    <select name="products{$smarty.section.line.index|htmlsafe}"
                            {if $smarty.section.line.index == 0}class="validate[required]"{/if}
                            onchange="invoice_product_change_price($(this).val(), {$smarty.section.line.index|htmlsafe}, jQuery('#quantity{$smarty.section.line.index|htmlsafe}').val() );">
                        <option value=""></option>
                        {foreach $products as $product}
                            <option {if $product.id == $defaults.product} selected {/if} value="{if isset($product.id)}{$product.id|htmlsafe}{/if}">{$product.description|htmlsafe}</option>
                        {/foreach}
                    </select>
                {/if}

            </td>
            <td>
                <input id="unit_price{$smarty.section.line.index|htmlsafe}" name="unit_price{$smarty.section.line.index|htmlsafe}" size="7" value=""/>
            </td>
        </tr>
        <tr class="text{$smarty.section.line.index|htmlsafe} hide">
            <td colspan="3">
                <textarea class="detail" name='description{$smarty.section.line.index|htmlsafe}'
                          rows="3" cols="80" data-description="{$LANG['description']}"></textarea>
            </td>
        </tr>
    {/section}
    {$customFields.1}
    {$customFields.2}
    {$customFields.3}
    {$customFields.4}
    <tr>
        <td colspan="3" class="details_screen">{$LANG.notes}</td>
    </tr>
    <tr>
        <td colspan="3">
            <input name="note" id="note" type="hidden">
            <trix-editor input="note"></trix-editor>
        </td>
    </tr>
    <tr>
        <td class="details_screen">{$LANG.tax}</td>
        <td><input type="text" name="tax" size="15"/>
            {if !isset($taxes) }
                <p><em>{$LANG.no_taxes}</em></p>
            {else}
                <select name="tax_id">
                    {foreach $taxes as $tax}
                        <option {if $tax.tax_id == $defaults.tax} selected {/if} value="{if isset($tax.tax_id)}{$tax.tax_id|htmlsafe}{/if}">{$tax.tax_description|htmlsafe}</option>
                    {/foreach}
                </select>
            {/if}
        </td>
    </tr>
    <tr>
        <td class="details_screen">{$LANG.inv_pref}</td>
        <td><input type="text" name="preference_id"/>
            {if !isset($preferences) }
                <p><em>{$LANG.no_preferences}</em></p>
            {else}
                <select name="preference_id">
                    {foreach $preferences as $preference}
                        <option {if $preference.pref_id == $defaults.preference} selected {/if} value="{if isset($preference.pref_id)}{$preference.pref_id|htmlsafe}{/if}">{$preference.pref_description|htmlsafe}</option>
                    {/foreach}
                </select>
            {/if}
        </td>
    </tr>
    <tr>
        <td align="left">
            <a class="cluetip" href="#"
               rel="index.php?module=documentation&amp;view=view&amp;page=help_invoice_custom_fields" title="{$LANG.want_more_fields}">
                <img src="{$help_image_path}help-small.png" alt=""/>
                {$LANG.want_more_fields}
            </a>
        </td>
    </tr>
    <!--Add more line items while in an itemeised invoice - Get style - has problems- wipes the current values of the existing rows - not good
    <tr>
    <td>
    <a href="?get_num_line_items=10">Add 5 more line items</a>
    </tr>
    -->
    </table>
    <!-- </div> -->
    <hr/>
    <table class="center">
        <tr>
            <td>
                <button type="submit" class="positive" name="submit" value="{$LANG.save}">
                    <img class="button_img" src="../../../images/tick.png" alt=""/>
                    {$LANG.save}
                </button>
                <input type="hidden" name="max_items" value="{$smarty.section.line.index|htmlsafe}"/>
                <input type="hidden" name="type" value="3"/>
                <a href="index.php?module=invoices&amp;view=manage" class="negative">
                    <img src="../../../images/cross.png" alt=""/>
                    {$LANG.cancel}
                </a>
            </td>
        </tr>
    </table>
</form>
