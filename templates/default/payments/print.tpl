<html lang="en">
<head>
  <title>{$preference.pref_inv_wording|htmlSafe} {$LANG.numberShort|htmlSafe}: {$invoice.index_id|htmlSafe}</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="images/favicon.ico"/>
  {if isset($css)}
    <link rel="stylesheet" type="text/css" href="{$css|urlSafe}" media="all">
  {/if}
</head>
<body>
<br />
<div id="container">
  <div id="header"></div>
  <table class="center">
    <tr>
      <td colspan="5"><img src="{$logo|urlSafe}" style="border:0; text-align:left;margin: 0 10px;" alt="{$logo|urlSafe}"></td>
      <th class="align__text-right">
        <span class="font1">{$LANG.receiptUc} {$LANG.for} {$LANG.paymentId}&nbsp;{$payment.id|htmlSafe}</span>
      </th>
    </tr>
    <tr>
      <td colspan="6" class="tbl1-top">&nbsp;</td>
    </tr>
  </table>
  <table class="center">
    <tr>
      {if $cust_info_count >= 1}
        <td class="tbl1-bottom col1"><b>{$cust_info[0][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[0][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 1}
        <td class="tbl1-bottom col1"><b>{$biller_info[0][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[0][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 2}
        <td class="tbl1-bottom col1"><b>{$cust_info[1][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[1][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 2}
        <td class="tbl1-bottom col1"><b>{$biller_info[1][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[1][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 3}
        <td class="tbl1-bottom col1"><b>{$cust_info[2][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[2][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 3}
        <td class="tbl1-bottom col1"><b>{$biller_info[2][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[2][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 4}
        <td class="tbl1-bottom col1"><b>{$cust_info[3][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[3][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 4}
        <td class="tbl1-bottom col1"><b>{$biller_info[3][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[3][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 5}
        <td class="tbl1-bottom col1"><b>{$cust_info[4][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[4][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 5}
        <td class="tbl1-bottom col1"><b>{$biller_info[4][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[4][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 6}
        <td class="tbl1-bottom col1"><b>{$cust_info[5][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[5][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 6}
        <td class="tbl1-bottom col1"><b>{$biller_info[5][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[5][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 7}
        <td class="tbl1-bottom col1"><b>{$cust_info[6][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[6][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 7}
        <td class="tbl1-bottom col1"><b>{$biller_info[6][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[6][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 8}
        <td class="tbl1-bottom col1"><b>{$cust_info[7][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[7][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 8}
        <td class="tbl1-bottom col1"><b>{$biller_info[7][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[7][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 9}
        <td class="tbl1-bottom col1"><b>{$cust_info[8][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[8][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 9}
        <td class="tbl1-bottom col1"><b>{$biller_info[8][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[8][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 10}
        <td class="tbl1-bottom col1"><b>{$cust_info[9][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[9][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 10}
        <td class="tbl1-bottom col1"><b>{$biller_info[9][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[9][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 11}
        <td class="tbl1-bottom col1"><b>{$cust_info[10][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[10][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 11}
        <td class="tbl1-bottom col1"><b>{$biller_info[10][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[10][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 12}
        <td class="tbl1-bottom col1"><b>{$cust_info[11][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[11][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 12}
        <td class="tbl1-bottom col1"><b>{$biller_info[11][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[11][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 13}
        <td class="tbl1-bottom col1"><b>{$cust_info[12][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[12][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 13}
        <td class="tbl1-bottom col1"><b>{$biller_info[12][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[12][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      {if $cust_info_count >= 14}
        <td class="tbl1-bottom col1"><b>{$cust_info[13][0]}</b></td>
        <td class="col1 tbl1-bottom">{$cust_info[13][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
      <td class="tbl1-bottom col1"></td>
      {if $biller_info_count >= 14}
        <td class="tbl1-bottom col1"><b>{$biller_info[13][0]}</b></td>
        <td class="col1 tbl1-bottom">{$biller_info[13][1]|htmlSafe}</td>
      {else}
        <td class="tbl1-bottom col1"></td>
        <td class="col1 tbl1-bottom"></td>
      {/if}
    </tr>
    <tr>
      <td class="" colspan="4"></td>
    </tr>
  </table>
  <table class="left" style="width:100%;;">
    <tr>
      <td colspan="6"><br /></td>
    </tr>
    <tr>
      <td class="tbl1-bottom col1"><b>{$LANG.paymentId}</b></td>
      <td class="tbl1-bottom col1" colspan="3"><b>{$preference.pref_description|htmlSafe}{$LANG.idUc}</b></td>
      <td class="tbl1-bottom col1 align__text-right"><b>{$LANG.amountUc}</b></td>
      <td class="tbl1-bottom col1 align__text-right"><b>{$LANG.dateUc}</b></td>
      <td class="tbl1-bottom col1 align__text-right"><b>{$LANG.paymentType}</b></td>
    </tr>
    <tr class="">
      <td class="">{$payment.id|htmlSafe}</td>
      <td class="" colspan="3">{$invoice.index_id|htmlSafe}</td>
      <td class="align__text-right">{$preference.pref_currency_sign}{$payment.ac_amount|utilNumber}</td>
      <td class="align__text-right">{$payment.date|htmlSafe}</td>
      <td class="align__text-right">
        {$paymentType.pt_description|htmlSafe}
        {if $payment.ac_check_number != ""}&nbsp;{$payment.ac_check_number|htmlSafe}{/if}
      </td>
    </tr>
    <tr>
      <td colspan="6"><br /></td>
    </tr>
    <tr>
      <td colspan="6"><br /></td>
    </tr>
    {* hide notes if from an online payment *}
    {if $payment.ac_notes != "" && $preference.include_online_payment ==""}
      <tr>
        <td class='tbl1-bottom col1'>{$LANG.notes}:</td>
        <td colspan="2">{$payment.ac_notes|outHtml}</td>
      </tr>
    </table>
  {/if}
</div>
</body>
</html>
