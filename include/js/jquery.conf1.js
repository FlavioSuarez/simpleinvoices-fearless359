// Verify check number on change to number or type field.
$(document).on("change", ".validateCheckNumber", (function() {
    // noinspection JSUnresolvedFunction
    validateCheckNumber();
}))

// See if amount greater than payment due or warehoused amount
$(document).on("change", ".checkForWarehousedAmount", (function() {
    checkPaymentInWarehouse();
}));

// Set warehoused attributes for screen fields when invoice field changed.
$(document).on("change", ".setWarehousedInfo", (function() {
    setWarehouseInfoInAmountFields();
}));

// Call to reload sub_customer list if parent ID changed.
$(document).on("change", ".setSubCustomers", (function() {
    let customerId = $(this).val();
    invoiceCustomerChange(customerId);
}));

/* Product Change - updates line item with product price info */
$(document).on("change", ".product_change", (function () {
    let product = $(this).val();
    let rowNumber = $(this).attr("data-row-num");
    let productGroupsEnabled = $(this).attr("data-product-groups-enabled");
    let quantity = $("#quantity" + rowNumber).val();
    // This function is in the jquery_functions.js.tpl file and will resolve at runtime.
    // noinspection JSUnresolvedFunction
    invoiceProductChange(product, rowNumber, quantity, productGroupsEnabled);
}));

// Click on export invoice button and build href for pdf, doc and xls
$(document).on("click", ".invoice_export_dialog", (function () {
    let row_number = $(this).attr("data-row-num");
    let spreadsheet = $(this).attr("data-spreadsheet");
    let wordprocessor = $(this).attr("data-wordprocessor");
    export_invoice(row_number, spreadsheet, wordprocessor);
    ShowDialog(true);
}));

//add new line item in invoices
$(document).on("click", "a.addLineItem", (function (e) {
    e.preventDefault();
    addLineItem();
}));

$(document).ready(function () {
    // Form submission verification
    $('#frmpost').submit(function (e) {
        // Check number validation
        // noinspection JSUnresolvedFunction
        verifyPaymentTypeAndCheckNumberConsistent(e);
    });

    // Export dialog window - onclick send href to create export file and close window
    $(".export_window").click(function() {
        HideDialog();
    });

    // Close button on export dialog
    $("#webDialogClose").click(function (e) {
        HideDialog();
        e.preventDefault();
    });

    $('#tabs_customer').tabs();

    $(".date-picker").datepicker({
        dateFormat: "yy-mm-dd"
    });

    /* Product Inventory Change - updates line item with product price info */
    $(".product_inventory_change").change(function () {
        let $product = $(this).val();
        let $existing_cost = $("#cost").val();
        product_inventory_change($product, $existing_cost);
    });

    //calc number of line items
    $(".invoice_save").click(function () {
        // noinspection JSJQueryEfficiency
        $('#gmail_loading').show();
        count_invoice_line_items();
        // noinspection JSJQueryEfficiency
        $('#gmail_loading').hide();
    });
});
