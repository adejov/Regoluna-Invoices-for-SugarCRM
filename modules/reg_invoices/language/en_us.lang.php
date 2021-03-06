<?php
/*********************************************************************************
 *
 * Copyright (C) 2008 Rodrigo Saiz Camarero (http://www.regoluna.com)
 *
 * This file is part of "Regoluna® Spanish Invoices" module.
 *
 * "Regoluna® Spanish Invoices" is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public License as published
 * by the Free Software Foundation, version 3 of the License.
 *
 ********************************************************************************/
$mod_strings = array (
  'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
  'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
  'LBL_ID' => 'ID',
  'LBL_DATE_ENTERED' => 'Date Created',
  'LBL_DATE_MODIFIED' => 'Date Modified',
  'LBL_MODIFIED' => 'Modified By',
  'LBL_MODIFIED_ID' => 'Modified By Id',
  'LBL_MODIFIED_NAME' => 'Modified By Name',
  'LBL_CREATED' => 'Created By',
  'LBL_CREATED_ID' => 'Created By Id',
  'LBL_DESCRIPTION' => 'Description',
  'LBL_DELETED' => 'Deleted',
  'LBL_NAME' => 'Name',
  'LBL_CREATED_USER' => 'Created by User',
  'LBL_MODIFIED_USER' => 'Modified by User',
  'LBL_MODULE_NAME' => 'Facturas',
  'LBL_MODULE_TITLE' => 'Facturas',
  'LBL_SEARCH_FORM_TITLE' => 'Search Facturas',
  'LBL_VIEW_FORM_TITLE' => 'Sale View',
  'LBL_LIST_FORM_TITLE' => 'Facturas List',
  'LBL_SALE_NAME' => 'Sale Name:',
  'LBL_SALE' => 'Sale:',
  'LBL_LIST_SALE_NAME' => 'Name',
  'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
  'LBL_LIST_AMOUNT' => 'Amount',
  'LBL_WITH_TAXES' => 'With Taxes',
  'LBL_LIST_DATE_CLOSED' => 'Close',
  'LBL_LIST_SALE_STAGE' => 'Sales Stage',
  'LBL_ACCOUNT_ID' => 'Account ID',
  'LBL_CURRENCY_ID' => 'Currency ID',
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
  'UPDATE' => 'Sale - Currency Update',
  'UPDATE_DOLLARAMOUNTS' => 'Update U.S. Dollar Amounts',
  'UPDATE_VERIFY' => 'Verify Amounts',
  'UPDATE_VERIFY_TXT' => 'Verifies that the amount values in sales are valid decimal numbers with only numeric characters(0-9) and decimals(.)',
  'UPDATE_FIX' => 'Fix Amounts',
  'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for sales based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Creating New Currency:',
  'UPDATE_VERIFY_FAIL' => 'Record Failed Verification:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Current Amount:',
  'UPDATE_VERIFY_FIX' => 'Running Fix would give',
  'UPDATE_INCLUDE_CLOSE' => 'Include Closed Records',
  'UPDATE_VERIFY_NEWAMOUNT' => 'New Amount:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'New Currency:',
  'UPDATE_DONE' => 'Done',
  'UPDATE_BUG_COUNT' => 'Bugs Found and Attempted to Resolve:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs Found:',
  'UPDATE_COUNT' => 'Records Updated:',
  'UPDATE_RESTORE_COUNT' => 'Record Amounts Restored:',
  'UPDATE_RESTORE' => 'Restore Amounts',
  'UPDATE_RESTORE_TXT' => 'Restores amount values from the backups created during fix.',
  'UPDATE_FAIL' => 'Could not update - ',
  'UPDATE_NULL_VALUE' => 'Amount is NULL setting it to 0 -',
  'UPDATE_MERGE' => 'Merge Currencies',
  'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
  'LBL_ACCOUNT_NAME' => 'Account Name:',
  'LBL_AMOUNT' => 'Amount:',
  'LBL_AMOUNT_USDOLLAR' => 'Amount USD:',
  'LBL_CURRENCY' => 'Currency:',
  'LBL_DATE_CLOSED' => 'Expected Close Date:',
  'LBL_TYPE' => 'Type:',
  'LBL_CAMPAIGN' => 'Campaign:',
  'LBL_NEXT_STEP' => 'Next Step:',
  'LBL_LEAD_SOURCE' => 'Lead Source:',
  'LBL_SALES_STAGE' => 'Sales Stage:',
  'LBL_PROBABILITY' => 'Probability (%):',
  'LBL_DUPLICATE' => 'Possible Duplicate Sale',
  'MSG_DUPLICATE' => 'The Sale record you are about to create might be a duplicate of a sale record that already exists. Sale records containing similar names are listed below.<br>Click Save to continue creating this new Sale, or click Cancel to return to the module without creating the sale.',
  'LBL_NEW_FORM_TITLE' => 'New Facturas',
  'LNK_NEW_SALE' => 'Create Sale',
  'LNK_SALE_LIST' => 'Sale',
  'ERR_DELETE_RECORD' => 'A record number must be specified to delete the sale.',
  'LBL_TOP_SALES' => 'My Top Open Sale',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Are you sure you want to remove this contact from the sale?',
  'SALE_REMOVE_PROJECT_CONFIRM' => 'Are you sure you want to remove this sale from the project?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sale',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
  'LBL_RAW_AMOUNT' => 'Raw Amount',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
  'LBL_MY_CLOSED_SALES' => 'My Closed Sales',
  'LBL_TOTAL_SALES' => 'Total Sales',
  'LBL_CLOSED_WON_SALES' => 'Closed Won Sales',
  'LBL_SALE_INFORMATION' => 'Sale Information',
  'LBL_HOMEPAGE_TITLE' => 'My Facturas',
  'LNK_NEW_RECORD' => 'Create Facturas',
  'LNK_NEW_INVOICE' => 'New Invoice',
  'LNK_NEW_QUOTE' => 'New Quote',
  'LNK_LIST' => 'Facturas',
  'LBL_FACT_FACTURAS_SUBPANEL_TITLE' => 'Facturas',
  'LBL_NUMERO' => 'Number',
  'LBL_NUMERO_LIST' => 'Num',
  'LBL_FECHA_EMISION' => 'Fecha',
  'LBL_DESCUENTO' => 'Descuento',
  'LBL_REPERCUTIDO' => '% impuesto repercutido',
  'LBL_TIPO_IMPUESTO' => 'Impuesto repercutido',
  'LBL_RETENCION' => '% retencion',
  'LBL_ESTADO' => 'Estado',
  'LBL_ACCOUNT' => 'Account',
  'LBL_YEAR' => 'Year',

  'LBL_ITEMS_SUBPANEL' => 'Items',
  'LBL_ITEMS' => 'Items',

  'LBL_TOTAL_ITEMS'=>'Total items',
  'LBL_TOTAL_DESCUENTO'=>'Total discount',
  'LBL_TOTAL_BASE'=>'Base',
  'LBL_TOTAL_RETENCION'=>'Retention',
  'LBL_TOTAL_IVA'=>'TAX',
  'LBL_CONDICIONES'=>'Conditions',
  'LBL_AUTOGEN' => 'Auto on save',
  'LBL_CHANGE_BUTTON' => 'Change number',
  'LBL_FACTURAE' => 'Facturae',
  'LBL_FACTURAE_TITLE' => 'Get invoice in XML format (Facturae)',
  'LBL_GET_PDF' => 'PDF',
  'LBL_GET_PDF_TITLE' => 'Get invoice in PDF format',
  'LBL_FACT_SIZE'=>'Invoice size in ',
  'LBL_NOTES_SUBPANEL' => 'Notes and attachtments',
  'LBL_FIRMANDO_XML'=>'Signing Facturae invoice...',
  'LBL_FIRMANDO_PDF'=>'Signing PDF invoice...',
  'LBL_AVISO_JAVA'=>'It is a requirement to use Java Plugin 1.6 or greater. Please make sure you have it correctly installed. ',
  'LBL_SIGN_XML'=>'Signed Facturae',
  'LBL_SIGN_PDF'=>'Signed PDF',
  'LBL_PRINT'=>'Print',
  'LBL_PRINT_TITLE'=>'Load PDF and print',
  'LBL_COPY' => 'copy',
  'LBL_AMOUNT_WITH_TAXES' => 'Amount with taxes',
  'LBL_ISSUER' => 'Issuer',
);


$mod_strings['LBL_FACT_CONF_TITLE'] = 'Invoice Configuration';

//Form panel titles
$mod_strings['LBL_INVOICE_OPTIONS'] = 'Invoice Options';
$mod_strings['LBL_ACCOUNT_NIF_FIELD'] = 'Tax identification number field in Accounts';
$mod_strings['LBL_ACCOUNT_NIF_FIELD_DESC'] = 'Select one field from Accounts to be treated as Tax Number';
$mod_strings['LBL_RESTART_NUMBERS'] = 'Restart numbering';
$mod_strings['LBL_RESTART_NUMBERS_DESC'] = 'Reset invoice numbering.<br><strong></strong>';
$mod_strings['LBL_RESTART_CONTINUOUS'] = 'Continuous. No restart';
$mod_strings['LBL_RESTART_YEARLY'] = 'Yearly ( YYYY-N ) ';
$mod_strings['LBL_RESTART_DAILY'] = 'Daily ( YYYMMDD-N )';


$mod_strings['LBL_PATH_TO_LOGO'] = 'Path to logo';
$mod_strings['LBL_PATH_TO_LOGO_DESC'] = 'Where is logo image for PDFs<br>(By default "themes/Sugar/images/company_logo.png")';

$mod_strings['LBL_GENERAL_CONDITIONS'] = 'General Conditions';
$mod_strings['LBL_GENERAL_CONDITIONS_DESC'] = 'General conditions default value for all invoices.';

$mod_strings['LBL_DEFAULT_TAX_TYPE'] = 'Default tax type';
$mod_strings['LBL_DEFAULT_TAX'] = 'Default tax';
$mod_strings['LBL_DEFAULT_RETENTION'] = 'Default retention';
