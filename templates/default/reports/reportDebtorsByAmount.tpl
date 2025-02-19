{include file=$path|cat:"library/reportTitle.tpl" title=$title}
{include file=$path|cat:"library/exportButtons.tpl"
         params=[
             'fileName' => "reportDebtorsByAmount",
             'includePaidInvoices' => $includePaidInvoices|urlencode,
             'title' => $title|urlencode
         ]
}
{if $menu}
    <form name="frmpost" method="POST" id="frmpost"
          action="index.php?module=reports&amp;view=reportDebtorsByAmount">
        <div class="si_form si_form_search">
            <div class="grid__area">
                {include file=$path|cat:"library/includePaidInvoices.tpl"}
                {include file=$path|cat:"library/runReportButton.tpl" value="reportDebtorsByAmount" label=$LANG.runReport}
            </div>
        </div>
    </form>
{/if}
{if isset($smarty.post.submit) || $view == "export"}
    {include file=$path|cat:"reportDebtorsByAmountBody.tpl"}
{/if}
