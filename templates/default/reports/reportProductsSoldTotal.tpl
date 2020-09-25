<table class="si_report_table">
	<thead>
		<tr>
			<th class="bold" colspan="2">{$LANG.productsSoldTotal}</th>
		</tr>
	</thead>
	<tbody>
	{foreach $data as $customer}
		<tr class="tr_{cycle values="A,B"}">
			<td>{$customer.description|htmlSafe}</td>
			<td>{$customer.sum_quantity|utilNumber:0|default:'-'}</td>
		</tr>
	{/foreach}
	</tbody>
	<tfoot>
	<tr>
		<td class="page_layer si_right">{$LANG.totalUc}</td>
		<td class="page_layer"><span class="bold">{$total_quantity|utilNumber:0|default:'-'}</span></td>
	</tr>
	</tfoot>
</table>
