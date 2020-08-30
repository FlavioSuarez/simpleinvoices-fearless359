{*
 * Script: add.tpl
 *  Biller add template
 *
 * Last edited:
*    2016-01-16 by Rich Rowley to add signature field.
 *   2008-08-25
 *
 * License:
 *   GPL v3 or above
 *}

{if !empty($smarty.post.name) && isset($smarty.post.submit) }
    {include file="templates/default/billers/save.tpl"}
{else}
    <!--suppress HtmlFormInputWithoutLabel -->
    <form name="frmpost" method="POST" id="frmpost"
          action="index.php?module=billers&amp;view=add">
        <div class="si_form">
            <table>
                <tr>
                    <th class="details_screen">{$LANG.biller_name}
                        <a class="cluetip" href="#" title="{$LANG.required_field}" tabindex="-1"
                           rel="index.php?module=documentation&amp;view=view&amp;page=help_required_field">
                            <img src="{$helpImagePath}required-small.png" alt=""/>
                        </a>
                    </th>
                    <td>
                        <input type="text" name="name" id="name" tabindex="10" size="25"
                               class="si_input validate[required] text-input"
                               value="{if isset($smarty.post.name)}{$smarty.post.name|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.street}</th>
                    <td>
                        <input type="text" name="street_address" tabindex="20" size="25"
                               value="{if isset($smarty.post.street_address)}{$smarty.post.street_address|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.street2}
                        <a class="cluetip" href="#" title="{$LANG.street2}" tabindex="-1"
                           rel="index.php?module=documentation&amp;view=view&amp;page=help_street2">
                            <img src="{$helpImagePath}help-small.png" alt=""/>
                        </a>
                    </th>
                    <td>
                        <input type="text" name="street_address2" tabindex="30" size="25"
                               value="{if isset($smarty.post.street_address2)}{$smarty.post.street_address2|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.city}</th>
                    <td>
                        <input type="text" name="city" tabindex="40" size="25"
                               value="{if isset($smarty.post.city)}{$smarty.post.city|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.state}</th>
                    <td>
                        <input type="text" name="state" tabindex="50" size="25"
                               value="{if isset($smarty.post.state)}{$smarty.post.state|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.zip}</th>
                    <td>
                        <input type="text" name="zip_code" tabindex="60" size="25"
                               value="{if isset($smarty.post.zip_code)}{$smarty.post.zip_code|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.country}</th>
                    <td>
                        <input type="text" name="country" tabindex="70" size="50"
                               value="{if isset($smarty.post.country)}{$smarty.post.country|htmlsafe}{/if}"/></td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.phone}</th>
                    <td>
                        <input type="text" name="phone" tabindex="60" size="25"
                               value="{if isset($smarty.post.phone)}{$smarty.post.phone|htmlsafe}{/if}"/></td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.mobile_phone}</th>
                    <td>
                        <input type="text" name="mobile_phone" tabindex="70" size="25"
                               value="{if isset($smarty.post.mobile_phone)}{$smarty.post.mobile_phone|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.fax}</th>
                    <td>
                        <input type="text" name="fax" tabindex="80" size="25"
                               value="{if isset($smarty.post.fax)}{$smarty.post.fax|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.email}</th>
                    <td>
                        <input type="text" name="email" tabindex="90" size="25"
                               value="{if isset($smarty.post.email)}{$smarty.post.email|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.signature}</th>
                    <td>
                        <input name="signature" id="signature" {if isset($smarty.post.signature)}value="{$smarty.post.signature|outhtml}"{/if} type="hidden">
                        <trix-editor class="si_input" input="signature" tabindex="100"></trix-editor>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.paypal_business_name}</th>
                    <td>
                        <input type="text" name="paypal_business_name" tabindex="110" size="25"
                               value="{if isset($smarty.post.paypal_business_name)}{$smarty.post.paypal_business_name|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.paypal_notify_url}</th>
                    <td>
                        <input type="text" name="paypal_notify_url" tabindex="120" size="50"
                               value="{if isset($smarty.post.paypal_notify_url)}{$smarty.post.paypal_notify_url|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.paypal_return_url}</th>
                    <td>
                        <input type="text" name="paypal_return_url" tabindex="130" size="50"
                               value="{if isset($smarty.post.paypal_return_url)}{$smarty.post.paypal_return_url|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.eway_customer_id}</th>
                    <td>
                        <input type="text" name="eway_customer_id" tabindex="140" size="50"
                               value="{if isset($smarty.post.eway_customer_id)}{$smarty.post.eway_customer_id|htmlsafe}{/if}"/>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.paymentsgateway_api_id}</th>
                    <td>
                        <input type="text" name="paymentsgateway_api_id" tabindex="150" size="50"
                               value="{if isset($smarty.post.paymentsgateway_api_id)}{$smarty.post.paymentsgateway_api_id|htmlsafe}{/if}"/>
                    </td>
                </tr>
                {if !empty($customFieldLabel.biller_cf1)}
                    <tr>
                        <th class="details_screen">{$customFieldLabel.biller_cf1|htmlsafe}
                            <a class="cluetip" href="#" title="{$LANG.custom_fields}" tabindex="-1"
                               rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields">
                                <img src="{$helpImagePath}help-small.png" alt=""/>
                            </a>
                        </th>
                        <td>
                            <input type="text" name="custom_field1" tabindex="160" size="25"
                                   value="{if isset($smarty.post.custom_field1)}{$smarty.post.custom_field1}{/if}"/>
                        </td>
                    </tr>
                {/if}
                {if !empty($customFieldLabel.biller_cf2)}
                    <tr>
                        <th class="details_screen">{$customFieldLabel.biller_cf2}
                            <a class="cluetip" href="#" title="{$LANG.custom_fields}" tabindex="-1"
                               rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields">
                                <img src="{$helpImagePath}help-small.png" alt=""/>
                            </a>
                        </th>
                        <td>
                            <input type="text" name="custom_field2" tabindex="170" size="25"
                                   value="{if isset($smarty.post.custom_field2)}{$smarty.post.custom_field2|htmlsafe}{/if}"/>
                        </td>
                    </tr>
                {/if}
                {if !empty($customFieldLabel.biller_cf3)}
                    <tr>
                        <th class="details_screen">{$customFieldLabel.biller_cf3|htmlsafe}
                            <a class="cluetip" href="#" title="{$LANG.custom_fields}" tabindex="-1"
                               rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields">
                                <img src="{$helpImagePath}help-small.png" alt=""/>
                            </a>
                        </th>
                        <td>
                            <input type="text" name="custom_field3" tabindex="180" size="25"
                                   value="{if isset($smarty.post.custom_field3)}{$smarty.post.custom_field3|htmlsafe}{/if}"/>
                        </td>
                    </tr>
                {/if}
                {if !empty($customFieldLabel.biller_cf4)}
                    <tr>
                        <th class="details_screen">{$customFieldLabel.biller_cf4|htmlsafe}
                            <a class="cluetip" href="#" title="{$LANG.custom_fields}" tabindex="-1"
                               rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields">
                                <img src="{$helpImagePath}help-small.png" alt=""/>
                            </a>
                        </th>
                        <td>
                            <input type="text" name="custom_field4" tabindex="190" size="25"
                                   value="{if isset($smarty.post.custom_field4)}{$smarty.post.custom_field4|htmlsafe}{/if}"/>
                        </td>
                    </tr>
                {/if}
                <tr>
                    <th class="details_screen">{$LANG.logo_file}
                        <a class="cluetip" href="#" title="{$LANG.logo_file}" tabindex="-1"
                           rel="index.php?module=documentation&amp;view=view&amp;page=help_insert_biller_text">
                            <img src="{$helpImagePath}help-small.png" alt=""/>
                        </a>
                    </th>
                    <td>
                        {html_options name=logo class=si_input output=$files values=$files selected=$files[0] tabindex=200 }
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.invoice_footer}</th>
                    <td>
                        <input name="footer" id="footer" {if isset($smarty.post.footer)}value="{$smarty.post.footer|outhtml}"{/if} type="hidden">
                        <trix-editor class="si_input" input="footer" tabindex="210"></trix-editor>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.notes}</th>
                    <td>
                        <input name="notes" id="notes" {if isset($smarty.post.notes)}value="{$smarty.post.notes|outhtml}"{/if} type="hidden">
                        <trix-editor class="si_input" input="notes" tabindex="220"></trix-editor>
                    </td>
                </tr>
                <tr>
                    <th class="details_screen">{$LANG.enabled}</th>
                    <td>
                        {html_options name=enabled class=si_input options=$enabled selected=1 tabindex=230}
                    </td>
                </tr>
            </table>
            <div class="si_toolbar si_toolbar_form">
                <button type="submit" class="positive" name="submit" value="{$LANG.insert_biller}" tabindex="240">
                    <img class="button_img" src="../../../images/tick.png" alt="{$LANG.save}"/>
                    {$LANG.save}
                </button>
                <a href="index.php?module=billers&amp;view=manage" class="negative" tabindex="250">
                    <img src="../../../images/cross.png" alt="{$LANG.cancel}"/>
                    {$LANG.cancel}
                </a>
            </div>
        </div>
        <input type="hidden" name="op" value="add"/>
        <input type="hidden" name="domain_id" value="{$domain_id}"/>
    </form>
{/if}
