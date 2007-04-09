<?php

/*
@author: Justin Kelly
@last edited: 2007-03-04
*/

/*// 1 means that the variable has been translated and // zero means it hasnt been translated - this is used by a script to calculate how much of each file has been done
regex :%s/;/ /1/;// 1\/\/1/g - remove the spaces
 */

#all
$title = "Simple Invoices";//1
$wording_for_enabledField ="Enabled";//1
$wording_for_disabledField ="Disabled";//1

#aplysia
$LANG['view'] = "View";
$LANG['edit'] = "Edit";
$LANG['enabled'] = "Enabled";
$LANG['biller_name'] = "Biller Name";
$LANG['biller_id'] = "Biller ID";	//which one is better?
$LANG['biller']['id'] = "Biller ID";
$LANG['action'] = "Action";
$LANG['add_new_biller'] = "Add New Biller";
$LANG['manage_billers'] = "Manage Billers";
$LANG['no_invoices'] = "No invoices";
$LANG['actions'] = "Actions";
$LANG['description'] = "Description";

#New lang file style $lang followed by the word or description - not grouped by page
$LANG['about'] = "About";//1
$LANG['account_info'] = "Account Info";//1
$LANG['actions'] = "Actions";//1
$LANG['add_biller'] = "Add Biller";//1
$LANG['add_customer'] = "Add Customer";//1
$LANG['add_invoice_preference'] = "Add Invoice Preference";//1
$LANG['add_new_invoice'] = "Add New Invoice";//1
$LANG['add_new_payment_type'] = "Add New payment Type";//1
$LANG['add_new_preference'] = "Add New Invoice Preference";//1
$LANG['add_new_product'] = "Add New Product";//1
$LANG['add_new_tax_rate'] = "Add New Tax Rate";//1
$LANG['add_tax_rate'] = "Add Tax Rate";//1
$LANG['add_payment_type'] = "Add Payment Type";//1
$LANG['add_product'] = "Add Product";//1
$LANG['address'] = "Address";//1
#might be able to delete adderss: variable - grep files
$LANG['address_city'] = "Address: City";//1
$LANG['address_country'] = "Address: Country";//1
$LANG['address_state'] = "Address: State";//1
$LANG['address_street'] = "Address: Street";//1
$LANG['address_zip'] = "Address: Zip";//1
$LANG['age'] = "Age";//1
$LANG['aging'] = "Aging";//1
$LANG['amount'] = "Amount";//1
$LANG['attention_short'] = "Attn.";//1
$LANG['backup_database'] = "Backup Database";//1
$LANG['biller'] = "Biller";//1
$LANG['biller_details'] = "Biller details";//1
$LANG['biller_edit'] = "Edit Biller";//1
$LANG['biller_id'] = "Biller ID";//1
$LANG['biller_name'] = "Biller Name";//1
$LANG['biller_to_add'] = "Biller to add";//1
$LANG['biller_sales'] = "Biller sales";//1
$LANG['biller_sales_total'] = "Biller sales - Total";//1
$LANG['biller_sales_by_customer_totals'] = "Biller sales by Customer - Totals"; //1
$LANG['billers'] = "Billers";//1
$LANG['cancel'] = "Cancel";//1
$LANG['change_log'] = "Change Log";//1
$LANG['city'] = "City";//1
$LANG['consulting'] = "Consulting";//1
$LANG['consulting_style'] = "Consulting style";//1
$LANG['country'] = "Country";//1
$LANG['credits'] = "Credits";//1
$LANG['currency_sign'] = "Currency sign";//1
$LANG['custom_field1'] = "Custom field 1";//1
$LANG['custom_field2'] = "Custom field 2";//1
$LANG['custom_field3'] = "Custom field 3";//1
$LANG['custom_field4'] = "Custom field 4";//1
$LANG['custom_field'] = "Custom field";//1
$LANG['custom_field_db_field_name'] = "Database field name";//1
$LANG['custom_fields'] = "Custom fields";//1
$LANG['custom_fields_upper'] = "Custom Fields";//1
$LANG['custom_label'] = "Custom label";//1
$LANG['customer'] = "Customer";//1
$LANG['customer_account'] = "Customer Account";//1
$LANG['customer_add'] = "Add New Customer";//1
$LANG['customer_contact'] = "Customer contact (Attn)";//1
$LANG['customer_details'] = "Customer details";//1
$LANG['customer_edit'] = "Edit Customer";//1
$LANG['customer_id'] = "Customer ID";//1
$LANG[''] = "Customer name";//1
$LANG['customers'] = "Customers";//1
$LANG['database_upgrade_manager'] = "Database Upgrade Manager";//1
$LANG['date'] = "date";//1
$LANG['date_created'] = "Date created";//1
$LANG['date_formatted'] = "Date (YYYY-MM-DD)";//1
$LANG['days'] = "days";//1
$LANG['debtors'] = "Debtors";//1
$LANG['debtors_by_amount_owed'] = "Debtors by amount owed";//1
$LANG['debtors_by_aging_periods'] = "Debtors by Aging periods";//1
$LANG['description'] = "Description";//1
$LANG['details'] = "Details";//1
$LANG['edit'] = "Edit";//1
$LANG['edit_view_tooltip'] = "Edit";//1
$LANG['email'] = "Email";//1
$LANG['email_quick'] = "Quick Email";//1
$LANG['export_as'] = "Export as";//1
$LANG['export_doc_tooltip'] = "to a word processor as";//1
$LANG['export_pdf'] = "Export to PDF";//1
$LANG['export_pdf_tooltip'] = "as PDF format";//1
$LANG['export_tooltip'] = "Export";//1 
$LANG['export_xls_tooltip'] = "to a spreadsheet as";//1
$LANG['faqs'] = "Frequently Asked Questions";//1
$LANG['fax'] = "Fax";//1
$LANG['format_tooltip'] = "format";//1
$LANG['get_help'] = "Get Help";//1
$LANG['gross_total'] = "Gross";//1
$LANG['help'] = "Help";//1
$LANG['help_manage_invoices'] = "Whats with all these different columns?";//1
$LANG['hide_details'] = "Hide details";//1
$LANG['home'] = "Home";//1
$LANG['id'] = "ID";//1
$LANG['ie_10_for_10'] = "* ie. 10 for 10%";//1
$LANG['included'] = "included";//1
$LANG['insert_biller'] = "Insert Biller";//1
$LANG['insert_customer'] = "Insert Customer";//1
$LANG['insert_payment_type'] = "Insert Payment Type";//1
$LANG['insert_preference'] = "Insert Preference";//1
$LANG['insert_product'] = "Insert Product";//1
$LANG['insert_tax_rate'] = "Insert Tax Rate";//1
$LANG['installation'] = "Installation";//1
$LANG['inv'] = "Invoice";//1
$LANG['inv_consulting'] = " - Consulting";//1
$LANG['inv_itemised'] = " - Itemised";//1
$LANG['inv_pref'] = "Invoice Preference";//1
$LANG['inv_total'] = " - Total";//1
$LANG['invoice'] = "Invoice";//1
$LANG['invoice_detail_heading'] = "Invoice detail heading";//1
$LANG['invoice_detail_line'] = "Invoice detail line";//1
$LANG['invoice_footer'] = "Invoice footer";//1
$LANG['invoice_heading'] = "Invoice heading";//1
$LANG['invoice_id'] = "Invoice ID";//1
$LANG['invoice_listings'] = "Invoice listing";//1
$LANG['invoice_payment_line_1_name'] = "Invoice payment line 1 name";//1
$LANG['invoice_payment_line_1_value'] = "Invoice payment line 1 value";//1
$LANG['invoice_payment_line_2_name'] = "Invoice payment line 2 name";//1
$LANG['invoice_payment_line_2_value'] = "Invoice payment line 2 value";//1
$LANG['invoice_payment_method'] = "Invoice payment method";//1
$LANG['invoice_preference_to_add'] = "Invoice preference to add";//1
$LANG['invoice_preferences'] = "Invoice Preferences";//1
$LANG['invoice_summary'] = "Invoice Summary";//1
$LANG['invoice_type'] = "Type";//1
$LANG['invoice_wording'] = "Invoice wording";//1
$LANG['invoices'] = "Invoices";//1
$LANG['item'] = "Item";//1
$LANG['itemised'] = "Itemised";//1
$LANG['itemised_style'] = "Itemised style";//1
$LANG['license'] = "License";//1
$LANG['login'] = "Log in";//1
$LANG['logo_file'] = "Logo file";//1
$LANG['logout'] = "Log out";//1
$LANG['manage'] = "Manage";//1
$LANG['manage_billers'] = "Manage Billers";//1
$LANG['manage_custom_fields'] = "Manage Custom Fields";//1
$LANG['manage_customers'] = "Manage Customers";//1
$LANG['manage_invoices'] = "Manage Invoices";//1
$LANG['manage_invoice_preferences'] = "Manage Invoice Preferences";//1
$LANG['manage_payment_types'] = "Manage Payment Types";//1
$LANG['manage_payments'] = "Manage Payments";//1
$LANG['manage_preferences'] = "Manage Preferences";//1
$LANG['manage_products'] = "Manage Products";//1
$LANG['manage_tax_rates'] = "Manage Tax Rates";//1
$LANG['mandatory_fields'] = "All fields are mandatory";//1
$LANG['mobile_phone'] = "Mobile Phone";//1
$LANG['mobile_short'] = "Mob.";//1
$LANG['new_invoice_consulting'] = "New Invoices - Consulting";//1
$LANG['new_invoice_itemised'] = "New Invoices - Itemised";//1
$LANG['new_invoice_total'] = "New Invoices - Total";//1
$LANG['no_customers'] = "There are no customers in the database, please add one";//1
$LANG['no_invoices'] = "There are no invoices in the database";//1
$LANG['no_payment_types'] = "Sorry, no payment types available, please insert one";//1
$LANG['no_preferences'] = "There are no invoice preferences in the database, please add one";//1
$LANG['no_tax_rates'] = "There are no tax rates in the database, please add one";//1
$LANG['note'] = "Note";//1
$LANG['notes'] = "Notes";//1
$LANG['notes_opt'] = "Notes (optional)";//1
$LANG['number_short'] = "No.";//1
$LANG['owing'] = "Owing";//1
$LANG['optional'] = "optional";//1
$LANG['options'] = "Options";//1
$LANG['paid'] = "Paid";//1
$LANG['payment_type'] = "Payment Type";//1
$LANG['payment_type_description'] = "Payment type description";//1
$LANG['payment_type_details'] = "Payment Type Details";//1
$LANG['payment_type_edit'] = "Edit Payment Type";//1
$LANG['payment_type_id'] = "Payment Type ID";//1
$LANG['payment_type_method'] = "Payment Type/Method";//1
$LANG['payment_type_to_add'] = "Payment type to add";//1
$LANG['payment_types'] = "Payment Types";//1
$LANG['payments'] = "Payments";//1
$LANG['phone'] = "Phone";//1
$LANG['phone_short'] = "Ph.";//1
$LANG['preference_id'] = "Preference ID";//1
$LANG['prepare_simple_invoices'] = "Prepare Simple Invoices for use";//1
$LANG['print_preview'] = "Print Preview";//1
$LANG['print_preview_tooltip'] = "Print Preview of";//1
$LANG['process_payment'] = "Process Payment";//1
$LANG['process_payment_for'] = "Process Payment for";//1
$LANG['product'] = "Product";//1
$LANG['product_description'] = "Product Description";//1
$LANG['product_edit'] = "Edit Product";//1
$LANG['product_enabled'] = "Product Enabled";//1
$LANG['product_id'] = "Product ID";//1
$LANG['product_sales'] = "Product sales";//1
$LANG['product_to_add'] = "Product to add";//1
$LANG['product_unit_price'] = "Product Unit Price";//1
$LANG['products'] = "Products";//1
$LANG['products_by_customer'] = "Products by customer";//1
$LANG['products_sold_customer_total'] = "Products sold - Customer - Total";//1
$LANG['products_sold_total'] = "Products sold - total";//1
$LANG['provision_of'] = "Provision of";//1
$LANG['quick_view_of'] = "This is a Quick View of";//1
$LANG['quick_view_tooltip'] = "Quick View of";//1 
$LANG['reports'] = "Reports";//1
$LANG['sales'] = "Sales";//1
$LANG['sales_by_customers'] = "Sales by customers";//1
$LANG['sanity_check'] = "Sanity check of invoices";//1
$LANG['save'] = "Save";//1
$LANG['save_biller'] = "Save Biller";//1
$LANG['save_biller_success'] = "Biller successfully saved, <br> you will be redirected to the Manage Billers page";//1
$LANG['save_biller_failure'] = "Something went wrong, please try saving the biller again<br>";//1
$LANG['save_custom_field'] = "Save Custom Field";//1
$LANG['save_custom_field_success'] = "Custom field successfully saved, <br> you will be redirected back to the Manage Custom Fields";//1
$LANG['save_custom_field_failure'] = "Something went wrong, please try editing the custom field again<br>";//1
$LANG['save_customer'] = "Save Customer";//1
$LANG['save_customer_failure'] = "Something went wrong, please try saving the customer again";//1
$LANG['save_customer_success'] = "Customer successfully saved,<br> you will be redirected back to the Manage Customers page";//1
$LANG['save_defaults'] = "Save Defaults";//1
$LANG['save_defaults_biller_success'] = "System defaults: Default biller successfully updated,<br> you will be redirected back to System Defaults page";//1
$LANG['save_defaults_customer_success'] = "System defaults: Default customer successfully updated,<br> you will be redirected back to System Defaults page";//1
$LANG['save_defaults_line_items_success'] = "System defaults: Number of line items successfully update,<br> you will be redirected back to System Defaults page";//1
$LANG['save_defaults_payment_type_success'] = "System defaults: Default payment_type updated,<br> you will be redirected back to System Defaults page";//1
$LANG['save_defaults_preference_success'] = "System defaults: Default invoice preference updated,<br> you will be redirected back to System Defaults page";//1
$LANG['save_defaults_tax_success'] = "System defaults: Default tax updated,<br> you will be redirected back to System Defaults page";//1
$LANG['save_defaults_template_success'] = "System defaults: Default invoice template successfully update,<br> you will be redirected back to System Defaults page";//1
$LANG['save_defaults_failure'] = "Something went wrong, please try setting the system defaults again";//1
$LANG['save_invoice'] = "Save Invoice";//1
$LANG['save_invoice_failure'] = "Something went wrong, please try saving the invoice again";//1
$LANG['save_invoice_items_success'] = "Processing invoice items<br> you will be redirected back to the Quick View of this invoice";//1
$LANG['save_invoice_success'] = "Processing invoice, <br> you will be redirected Quick View of this invoice";//1
$LANG['save_payment_invoice_success'] = "Payment successfully processed, <br> you will be redirected to the Manage Invoices page";//1
$LANG['save_payment_failure'] = "Something went wrong, please try saving the payment again";//1
$LANG['save_payment_success'] = "Payment successfully processed,<br> you will be redirected back to the Manage Payments page";//1
$LANG['save_payment_type'] = "Save Payment Type";//1
$LANG['save_payment_type_failure'] = "Something went wrong, please try saving the payment type again";//1
$LANG['save_payment_type_success'] = "Payment Type successfully saved, <br> you will be redirected back to the Manage Payment Types";//1
$LANG['save_prefence_failure'] = "Something went wrong, please try saving the invoice preference again";//1
$LANG['save_prefence_success'] = "Invoice preference successfully saved,<br> you will be redirected to Manage Preferences page";//1
$LANG['save_product'] = "Save Product";//1
$LANG['save_product_failure'] = "Something went wrong, please try saving the product again";//1
$LANG['save_product_success'] = "Product successfully saved, <br> you will be redirected to the Manage Products page";//1
$LANG['save_tax_rate'] = "Save Tax Rate";//1
$LANG['save_tax_rate_failure'] = "Something went wrong, please try adding the tax rate again";//1
$LANG['save_tax_rate_success'] = "Tax rate successfully saved, <br> you will be redirected to the Manage Tax Rates page";//1
$LANG['select_invoice'] = "Please select an invoice";//1
$LANG['show_details'] = "Show details";//1
$LANG['state'] = "State";//1
$LANG['street'] = "Street";//1
$LANG['street2'] = "Street address 2";//1
$LANG['sub_total'] = "Sub Total";//1
$LANG['sum'] = "Sum";//1
$LANG['summary'] = "Summary";//1
$LANG['summary_of_accounts'] = "Summary of accounts";//1
$LANG['system_defaults'] = "System Defaults";//1
$LANG['tax'] = "Tax";//1
$LANG['tax_description'] = "Tax description";//1
$LANG['tax_id'] = "Tax ID";//1
$LANG['tax_percentage'] = "Tax Percentage";//1
$LANG['tax_rate'] = "Tax Rate";//1
$LANG['tax_rate_details'] = "Tax rate details";//1
$LANG['tax_rate_id'] = "Tax Rate ID";//1
$LANG['tax_rate_to_add'] = "Tax rate to add";//1
$LANG['tax_rates'] = "Tax Rates";//1
$LANG['tax_total'] = "Total tax included";//1
$LANG['telephone_short'] = "Tel";//1
$LANG['total'] = "Total";//1
$LANG['total_amount'] = "Total amount";//1
$LANG['total_by_aging_periods'] = "Total by Aging periods";//1
$LANG['total_invoices'] = "Total Invoices";//1
$LANG['total_owed_per_customer'] = "Total owed per customer"; //1
$LANG['total_owing'] = "Total Owing";//1
$LANG['total_paid'] = "Total Paid";//1
$LANG['total_sales'] = "Total Sales";//1
$LANG['total_sales_by_customer'] = "Total Sales by Customer";//1
$LANG['total_style'] = "Total style";//1
$LANG['total_taxes'] = "Total taxes";//1
$LANG['total_uppercase'] = "TOTAL";//1
$LANG['totals'] = "Totals";//1
$LANG['unit_price'] = "Unit Price";//1
$LANG['upgrading_simple_invoices'] = "Upgrading Simple Invoices";//1
$LANG['using_simple_invoices'] = "Using Simple Invoices";//1
$LANG['view'] = "View";//1
$LANG['quantity'] = "Quantity";//1
$LANG['quantity_short'] = "Qty";//1
$LANG['want_more_fields'] = "want more fields";//1
$LANG['welcome'] = "Welcome to ";//1
$LANG['what_are_custom_fields'] = "What are custom fields";//1
$LANG['whats_this_page_about'] = "Whats this page about";//1
$LANG['zip'] = "Zip code";//1




#Index.php - front page


$LANG['shortcut'] ="Shortcut menu";//1

$LANG['getting_started'] ="Getting started";//1
$LANG['faqs_what'] ="What is Simple Invoices?";//1
$LANG['faqs_need'] ="What do I need to start invoicing?";//1
$LANG['faqs_how'] ="How do I create invoices?";//1
$LANG['faqs_type'] ="What are the different types of invoices?";//1

$LANG['create_invoice'] ="Create an invoice";//1

$LANG['manage_existing_invoice'] ="Manage your existing invoices";//1
$LANG['manage_invoices'] ="Manage Invoices";//1

$LANG['manage_data'] ="Manage your data";//1
$LANG['insert_customer'] = "Add Customer";//1
$LANG['insert_biller'] = "Add Biller";//1
$LANG['insert_product'] = "Add Product";//1

$LANG['options'] ="Options";//1

$LANG['stats'] =" Quick reports";//1
$LANG['stats_debtor'] ="Largest debtor";//1
$LANG['stats_customer'] ="Top Customer - by amount invoiced";//1
$LANG['stats_biller'] ="Top Biller - by amount invoiced";//1

/* Dont translate anything below here */

#Manage Invoices
$mi_page_title = " - Manage Invoices";//1
$mi_page_header = "Manage Invoices";//1
$mi_no_invoices = "There are no invoices in the database";//1
$mi_table_action = "Action";//1
$mi_table_id = "ID";//1
$mi_table_biller = "Biller";//1
$mi_table_customer = "Customer";//1
$mi_table_total = "Total";//1
$mi_table_paid = "Paid";//1
$mi_table_owing = "Owing";//1
$mi_table_type = "Type";//1
$mi_table_date = "Date created";//1
$mi_actions_quick_view = "view";//1
$mi_actions_quick_view_tooltip = "Quick View of";//1 
$mi_actions_edit_view = "edit";//1
$mi_actions_edit_view_toolkit = "Edit";//1
$mi_actions_print_preview_tooltip = "Print Preview of";//1
$mi_actions_export_tooltip = "Export";//1 
$mi_actions_export_pdf_tooltip = "as PDF format";//1
$mi_actions_format_tooltip = "format";//1
$mi_actions_export_xls_tooltip = "to a spreadsheet as";//1
$mi_actions_export_doc_tooltip = "to a word processor as";//1
$mi_actions_process_payment = "Process payment for";//1
$mi_action_invoice_total = "Add new Invoice - Total style";//1
$mi_action_invoice_itemised = "Add new Invoice - Itemised style";//1
$mi_action_invoice_consulting = "Add new Invoice - Consulting style";//1

#Manage Products
$mp_page_title = " - Manage Products";//1
$mp_page_header = "Manage Products";//1
//$mp_no_invoices = "There are no products in the database, please add one";//1
$LANG['no_products'] = "There are no products in the database, please add one";//1
$mp_table_action = "Action";//1
$mp_table_product_id = "Product ID";//1
$mp_table_product_desc = "Products description";//1
$mp_table_unit_price = "Unit Price";//1
$mp_actions_view = "View";//1
$mp_actions_edit = "Edit";//1
$mp_actions_new_product = "Add New Product";//1

#Manage Billers
$mb_page_title = " - Manage Billers";//1
$mb_page_header = "Manage Billers";//1
//$mb_no_invoices = "There are no billers in the database, please add one";//1
$LANG['no_billers'] = "There are no billers in the database, please add one";//1
$mb_table_action = "Action";//1
$mb_table_biller_id = "Biller ID";//1
$mb_table_biller_name = "Biller Name";//1
$mb_table_phone = "Phone";//1
$mb_table_mobile_phone = "Mobile Phone";//1
$mb_table_email = "Email";//1
$mb_actions_view = "View";//1
$mb_actions_edit = "Edit";//1
$mb_actions_new_biller = "Add New Biller";//1

#Manage Customers
$mc_page_title = " - Manage Customers";//1
$mc_page_header = "Manage Customers";//1
//$mc_no_invoices = "There are no customers in the database, please add one";//1
$LANG['no_customers'] = "There are no customers in the database, please add one";//1
$mc_table_action = "Action";//1
$mc_table_customer_id = "Customer ID";//1
$mc_table_ = "Customer Name";//1
$mc_table_attention = "Attention";//1
$mc_table_phone = "Phone";//1
$mc_table_email = "Email";//1
$mc_actions_view = "View";//1
$mc_actions_edit = "Edit";//1
$mc_actions_new_product = "Add New Customer";//1

#Manage Preferences
$mip_page_title = " - Manage Preferences";//1
$mip_page_header = "Manage Preferences";//1
//$mip_no_invoices = "There are no invoice preferences in the database, please add one";//1
$LANG['no_preferences'] = "There are no invoice preferences in the database, please add one";//1
$mip_table_action = "Action";//1
$mip_table_preference_id = "Preference ID";//1
$mip_table_description = "Description";//1
$mip_actions_view = "View";//1
$mip_actions_edit = "Edit";//1
$mip_actions_new_preference = "Add New Invoice Preference";//1

#Manage System Defautls manage_system_defaults.php
$msd_default_number_items = "Default number of line items:";//1
$msd_js_alert_def_inv_template = "Default invoice template";//1
$msd_def_inv_template = "Default invoice template ";//1
$msd_no_tax = "Sorry, no tax rate available, please insert one";//1
$msd_no_payment_type = "Sorry, no payment type available, please insert one";//1
$msd_tax = "Tax";//1
$msd_payment_type = "Payment Type";//1
$msd_invoice_preference = "Invoice Preference";//1
$msd_no_defaults = "There are no defaults";//1
$msd_page_title = " - Manage System Defaults";//1
$msd_heading = "System defaults";//1
$msd_submit_button  = "Submit defaults";//1


#Manage Account Payments
$map_page_title = " - Manage Payments";//1
$map_page_header = "Manage Payments";//1
$map_no_invoices = "There are no payments in the database";//1
$map_table_action = "Action";//1
$map_table_payment_id = "Payment ID";//1
$map_table_payment_invoice_id = "Inv. ID";//1
$map_table_biller = "Biller";//1
$map_table_customer = "Customer";//1
$map_table_amount = "Amount";//1
$map_table_notes = "Notes";//1
$map_table_payment_type = "Payment Type";//1
$map_table_date = "Date";//1
$map_actions_view = "View";//1
$map_actions_process_payment = "Process Payment";//1
$map_payments_filtered = "Payments filtered by Invoice ID";//1
$map_payments_filtered_invoice = "Process Payment for this Invoice";//1
$map_payments_filtered_customer = "Payments filtered by Customer ID";//1

#Manage Tax Rate
$mtr_page_title = " - Manage Tax Rates";//1
$mtr_page_header = "Manage Tax Rates";//1
//$mtr_no_invoices = "There are no tax rates in the database, please add one";//1
$LANG['no_tax_rates'] = "There are no tax rates in the database, please add one";//1
$mtr_table_action = "Action";//1
$mtr_table_tax_id = "Tax ID";//1
$mtr_table_tac_desc = "Tax description";//1
$mtr_table_percentage = "Tax percentage";//1
$mtr_actions_view = "View";//1
$mtr_actions_edit = "Edit";//1
$mtr_actions_new_tax = "Add New Tax Rate";//1

#Manage Payment Types
$mpt_page_title = " - Manage Payment Types";//1
$mpt_page_header = "Manage Payment Types";//1
$mpt_no_invoices = "There are no payment types in the database";//1
$mpt_table_action = "Action";//1
$mpt_table_pt_id = "ID";//1
$mpt_table_pt_description = "Description";//1
$mpt_actions_view = "View";//1
$mpt_actions_edit = "Edit";//1
$mpt_actions_new_tax = "Add New Payment Type";//1


?>
