{*
 *  Script: create.tpl
 * 	    Cron add template
 *
 *  Last Modified:
 *      20210618 by Rich Rowley to use grid layout.
 *
 *  License:
 *	    GPL v3 or above
 *
 *  Website:
 *	    https://simpleinvoices.group
 *}
{if !empty($smarty.post.invoice_id)}
    {include file="templates/default/cron/save.tpl"}
{else}
    <form name="frmpost" method="POST" id="frmpost" action="index.php?module=cron&amp;view=create">
        <div class="grid__area">
            <div class="grid__container grid__head-10">
                <label for="invoiceId" class="cols__1-span-1">{$LANG.invoiceUc}:</label>
                <select name="invoice_id" id="invoiceId" class="cols__2-span-9 validate[required]" autofocus tabindex="10">
                    <option value=''></option>
                    {foreach $invoice_all as $invoice}
                        <option value="{$invoice.id|htmlSafe}"
                                {if isset($smarty.post.invoice_id) &&
                                    $smarty.post.invoice_id == $invoice.id}selected{/if}>
                            {$invoice.index_name|htmlSafe}
                            ({$invoice.biller|htmlSafe}, {$invoice.customer|htmlSafe},
                            {$invoice.total|utilNumber})
                        </option>
                    {/foreach}
                </select>
            </div>
            <div class="grid__container grid__head-10">
                <label for="startdate" class="cols__1-span-3">{$LANG.startDate}:</label>
                <input type="text" name="start_date" id="startdate" tabindex="20"
                       class="cols__4-span-2 validate[required,custom[date],length[0,10]] date-picker"
                       value="{if isset($smarty.post.start_date)}{$smarty.post.start_date}{else}{'+1 days'|date_format:'%Y-%m-%d'}{/if}"/>

                <label for="enddate" class="cols__6-span-3 margin__left-4">{$LANG.endDate}:</label>
                <input type="text" name="end_date" id="enddate" class="cols__9-span-2 date-picker" tabindex="30"
                       {if isset($smarty.post.end_date)}value="{$smarty.post.end_date}"{/if}/>
            </div>
            <div class="grid__container grid__head-10">
                <label for="recurrenceId" class="cols__1-span-3">{$LANG.recurEach}:</label>
                <input name="recurrence" id="recurrenceId" class="cols__4-span-2 validate[required]" tabindex="40"
                       {if isset($smarty.post.recurrence)}value="{$smarty.post.recurrence}"{/if}/>
                <!--suppress HtmlFormInputWithoutLabel -->
                <select name="recurrence_type" class="cols__6-span-1 margin__left-0-5 validate[required]" tabindex="50">
                    <option value="day"
                            {if isset($smarty.post.recurrence_type) &&
                                $smarty.post.recurrence_type == 'day'}selected{/if})>{$LANG.days}</option>
                    <option value="week"
                            {if isset($smarty.post.recurrence_type) &&
                                $smarty.post.recurrence_type == 'week'}selected{/if})>{$LANG.weeks}</option>
                    <option value="month"
                            {if isset($smarty.post.recurrence_type) &&
                                $smarty.post.recurrence_type == 'month'}selected{/if})>{$LANG.months}</option>
                    <option value="year"
                            {if isset($smarty.post.recurrence_type) &&
                                $smarty.post.recurrence_type == 'year'}selected{/if})>{$LANG.years}</option>
                </select>
            </div>
            <div class="grid__container grid__head-10">
                <label for="emailBillerId" class="cols__1-span-3">{$LANG.emailBillerAfterCron}:</label>
                <div class="cols__4-span-7">
                    <select name="email_biller" id="emailBillerId" class="validate[required]">
                        <option value="{$smarty.const.ENABLED}"
                                {if isset($smarty.post.email_biller) &&
                                    $smarty.post.email_biller == $smarty.const.ENABELD}selected{/if}>
                                {$LANG.yesUc}
                        </option>
                        <option value="{$smarty.const.DISABLED}"
                                {if isset($smarty.post.email_biller) &&
                                    $smarty.post.email_biller == $smarty.const.DISABLED}selected{/if}>
                            {$LANG.noUc}
                        </option>
                    </select>
                </div>
            </div>
            <div class="grid__container grid__head-10">
                <label for="emailCustomerId" class="cols__1-span-3">{$LANG.emailCustomerAfterCron}:</label>
                <div class="cols__4-span-7">
                    <select name="email_customer" id="emailCustomerId" class="validate[required]">
                        <option value="{$smarty.const.ENABLED}"
                                {if isset($smarty.post.email_customer) &&
                                $smarty.post.email_customer == $smarty.const.ENABELD}selected{/if}>
                            {$LANG.yesUc}
                        </option>
                        <option value="{$smarty.const.DISABLED}"
                                {if isset($smarty.post.email_customer) &&
                                $smarty.post.email_customer == $smarty.const.DISABLED}selected{/if}>
                            {$LANG.noUc}
                    </select>
                </div>
            </div>
        </div>
        <br/>
        <div class="align__text-center">
            <button type="submit" class="positive" name="submit" value="{$LANG.save}">
                <img class="button_img" src="images/tick.png" alt="{$LANG.save}"/>{$LANG.save}
            </button>
            <a href="index.php?module=cron&amp;view=manage" class="button negative">
                <img src="images/cross.png" alt="{$LANG.cancel}"/>{$LANG.cancel}
            </a>
        </div>
        <input type="hidden" name="domain_id" value={if isset($domain_id)}{$domain_id}{/if}>
        <input type="hidden" name="op" value="create"/>
    </form>
{/if}
