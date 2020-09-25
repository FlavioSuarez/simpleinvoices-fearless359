<table class="si_report_table">
	<thead>
		<tr>
			<th colspan="5">{$LANG.debtorsByAmountOwingCustomer}</th>
		</tr>
		<tr>
			<th>{$LANG.id}</th>
			<th>{$LANG.customer}</th>
			<th>{$LANG.totalUc}</th>
			<th>{$LANG.paidUc}</th>
			<th>{$LANG.owingUc}</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th colspan="4">{$LANG.totalOwing}</th>
			<td>{$total_owed|utilNumber:2|default:'-'}</td>
		</tr>
	</tfoot>
	<tbody>
	{foreach $data as $customer}
		<tr>
			<td>{$customer.cid|htmlSafe}</td>
			<td>{$customer.customer|htmlSafe}</td>
			<td>{$customer.inv_total|utilNumber:2|default:'-'}</td>
			<td>{$customer.inv_paid|utilNumber:2|default:'-'}</td>
			<td>{$customer.inv_owing|utilNumber:2|default:'-'}</td>
		</tr>
	{/foreach}
	</tbody>
</table>
