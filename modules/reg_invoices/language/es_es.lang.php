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
  'LBL_ASSIGNED_TO_ID' => 'Asignado a Usuario con Id',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_ID' => 'ID',
  'LBL_DATE_ENTERED' => 'Fecha de Creación',
  'LBL_DATE_MODIFIED' => 'Última Modificación',
  'LBL_MODIFIED' => 'Modificado Por',
  'LBL_MODIFIED_ID' => 'Modificado Por Id',
  'LBL_MODIFIED_NAME' => 'Modificado Por Nombre',
  'LBL_CREATED' => 'Creado Por',
  'LBL_CREATED_ID' => 'Creado Por Id',
  'LBL_DESCRIPTION' => 'Descripción',
  'LBL_DELETED' => 'Eliminado',
  'LBL_NAME' => 'Nombre',
  'LBL_CREATED_USER' => 'Creado Por Usuario',
  'LBL_MODIFIED_USER' => 'Modificado Por Usuario',
  'LBL_MODULE_NAME' => 'Facturas',
  'LBL_MODULE_TITLE' => 'Facturas',
  'LBL_SEARCH_FORM_TITLE' => 'Buscar Facturas',
  'LBL_VIEW_FORM_TITLE' => 'Vista de Facturas',
  'LBL_LIST_FORM_TITLE' => 'Facturas Lista',
  'LBL_SALE_NAME' => 'Asunto de Factura:',
  'LBL_SALE' => 'Factura:',
  'LBL_LIST_SALE_NAME' => 'Nombre',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre de Cuenta',
  'LBL_LIST_AMOUNT' => 'Cantidad',
  'LBL_WITH_TAXES' => 'Con Impuestos',
  'LBL_LIST_DATE_CLOSED' => 'Cierre',
  'LBL_LIST_SALE_STAGE' => 'Etapa de Ventas',
  'LBL_ACCOUNT_ID' => 'ID de Cuenta',
  'LBL_CURRENCY_ID' => 'ID de Moneda',
  'LBL_TEAM_ID' => 'ID de Equipo',
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
  'UPDATE' => 'Venta - Actualización de Moneda',
  'UPDATE_DOLLARAMOUNTS' => 'Actualizar Cantidades en Dólares EEUU',
  'UPDATE_VERIFY' => 'Verificar Cantidades',
  'UPDATE_VERIFY_TXT' => 'Verifica que los valores de las cantidades en las ventas son números decimales válidos con sólo caracteres numéricos (0-9) y decimales(.)',
  'UPDATE_FIX' => 'Corregir Cantidades',
  'UPDATE_FIX_TXT' => 'Intenta corregir cualquier cantidad no válida creando un número decimal válido a partir de la cantidad actual. Antes realiza una copia de seguridad de todas las cantidades modificadas en el campo de base de datos amount_backup. Si tras la correción detecta problemas, no vuelva a realizar esta operación sin restaurar los valores previos desde la copia de seguridad ya que si no sobrescribirá la copia de seguridad con nuevos datos no válidos.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualiza las cantidades en Dólares EEUU para las ventas basadas en el conjunto actual de cambios de moneda. Este valor se usa para calcular gráficas y vistas de listas de cantidades monetarias.',
  'UPDATE_CREATE_CURRENCY' => 'Creando Nueva Moneda:',
  'UPDATE_VERIFY_FAIL' => 'Fallo de Verificación de Registro:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Moneda Actual:',
  'UPDATE_VERIFY_FIX' => 'La Corrección daría',
  'UPDATE_INCLUDE_CLOSE' => 'Registros Cerrados Incluidos',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nueva Cantidad:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nueva Moneda:',
  'UPDATE_DONE' => 'Hecho',
  'UPDATE_BUG_COUNT' => 'Problemas Detectados cuya Resolución se ha Intentado:',
  'UPDATE_BUGFOUND_COUNT' => 'Problemas Detectados:',
  'UPDATE_COUNT' => 'Registros Actualizados:',
  'UPDATE_RESTORE_COUNT' => 'Registros con Cantidades Restauradas:',
  'UPDATE_RESTORE' => 'Restaurar Cantidades',
  'UPDATE_RESTORE_TXT' => 'Restaura los valores de las cantidades desde la copia de seguridad creada durante la corrección.',
  'UPDATE_FAIL' => 'No ha podido actualizarse - ',
  'UPDATE_NULL_VALUE' => 'La cantidad es NULL, estableciéndola a 0 -',
  'UPDATE_MERGE' => 'Unificar Monedas',
  'UPDATE_MERGE_TXT' => 'Unifica múltiples monedas en una única moneda. Si detecta que hay múltiples registros de.type.moneda para la misma moneda, puede unificarlas. Esto también unificará las monedas para el resto de módulos.',
  'LBL_ACCOUNT_NAME' => 'Nombre de Cuenta:',
  'LBL_AMOUNT' => 'Cantidad:',
  'LBL_AMOUNT_USDOLLAR' => 'Cantidad en Dólares EEUU:',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_DATE_CLOSED' => 'Fecha de Cierre Prevista:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_CAMPAIGN' => 'Campaña:',
  'LBL_NEXT_STEP' => 'Próximo Paso:',
  'LBL_LEAD_SOURCE' => 'Toma de Contacto:',
  'LBL_SALES_STAGE' => 'Etapa de Ventas:',
  'LBL_PROBABILITY' => 'Probabilidad (%):',
  'LBL_DUPLICATE' => 'Posible Factura Duplicada',
  'MSG_DUPLICATE' => 'El registro para la factura que va a crear podría ser un duplicado de otro registro de factura existente. Los registros de facturas con nombres similares se listan a continuación.<br>Haga clic en Guardar para continuar con la creación de esta factura, o en Cancelar para volver al módulo sin crear la venta.',
  'LBL_NEW_FORM_TITLE' => 'Nuevo Facturas',
  'LNK_NEW_SALE' => 'Nueva Factura',
  'LNK_SALE_LIST' => 'Factura',
  'ERR_DELETE_RECORD' => 'Debe de especificar un número de registro para eliminar la factura.',
  'LBL_TOP_SALES' => 'Mis Principales Facturas Abiertas',
  'NTC_REMOVE_OPP_CONFIRMATION' => '¿Está seguro de que desea eliminar este contacto de la Factura?',
  'SALE_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de que desea eliminar esta factura del proyecto?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Factura',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Historial',
  'LBL_RAW_AMOUNT' => 'Importe Bruto',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciales',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
  'LBL_MY_CLOSED_SALES' => 'Mis Facturas Cerradas',
  'LBL_TOTAL_SALES' => 'Facturas Totales',
  'LBL_CLOSED_WON_SALES' => 'Facturas Cobradas',
  'LBL_SALE_INFORMATION' => 'Información sobre la Factura',
  'LBL_HOMEPAGE_TITLE' => 'Mi Facturas',
  'LNK_NEW_RECORD' => 'Crear Facturas',
  'LNK_NEW_INVOICE' => 'Nueva Factura',
  'LNK_NEW_QUOTE' => 'Nuevo presupuesto',
  'LNK_LIST' => 'Facturas',
  'LBL_FACT_FACTURAS_SUBPANEL_TITLE' => 'Facturas',
  'LBL_NUMERO' => 'Numero',
  'LBL_NUMERO_LIST' => 'Num',
  'LBL_FECHA_EMISION' => 'Fecha',
  'LBL_DESCUENTO' => 'Total descuentos',
  'LBL_REPERCUTIDO' => '% Impuesto repercutido',
  'LBL_TIPO_IMPUESTO' => 'Impuesto repercutido',
  'LBL_RETENCION' => '% Retencion (IRPF)',
  'LBL_ESTADO' => 'Estado',
  'LBL_ACCOUNT' => 'Cuenta',
  'LBL_YEAR' => 'Año',

  'LBL_ITEMS_SUBPANEL' => 'Items',
  'LBL_ITEMS' => 'Items',

  'LBL_TOTAL_ITEMS'=>'Total items',
  'LBL_TOTAL_DESCUENTO'=>'Descuento',
  'LBL_TOTAL_BASE'=>'Base',
  'LBL_TOTAL_RETENCION'=>'Retención',
  'LBL_TOTAL_IVA'=>'IVA',
  'LBL_CONDICIONES'=>'Condiciones',
  'LBL_AUTOGEN' => 'Generar automáticamente al guardar (emitidas y cobradas)',
  'LBL_CHANGE_BUTTON' => 'Cambiar número',
  'LBL_FACTURAE' => 'Facturae',
  'LBL_FACTURAE_TITLE' => 'Obtener factura en formato XML (Facturae)',
  'LBL_GET_PDF' => 'PDF',
  'LBL_GET_PDF_TITLE' => 'Descargar en formato PDF',
  'LBL_FACT_SIZE'=>'Valor de facturación en miles de euros: ',
  'LBL_NOTES_SUBPANEL' => 'Notas y adjuntos',

  'LBL_FIRMANDO_XML'=>'Firmando factura en formato Facturae...',
  'LBL_FIRMANDO_PDF'=>'Firmando factura en formato PDF...',
  'LBL_AVISO_JAVA'=>'Es necesario que el Plugin de Java 1.6 o superior esté instalado en su navegador',
  'LBL_SIGN_XML'=>'Firmar Facturae',
  'LBL_SIGN_PDF'=>'Firmar PDF',
  'LBL_PRINT'=>'Imprimir',
  'LBL_PRINT_TITLE'=>'Descargar PDF e imprimir directamente',
  'LBL_COPY' => 'copia',
  'LBL_AMOUNT_WITH_TAXES' => 'Mostrar cantidades con impuestos',
  'LBL_ISSUER' => 'Emisor',
);


// Configuration
$mod_strings['LBL_FACT_CONF_TITLE'] = 'Configuración de facturas';

//Form panel titles
$mod_strings['LBL_INVOICE_OPTIONS'] = 'Opciones de factura';
$mod_strings['LBL_ACCOUNT_NIF_FIELD'] = 'Campo NIF/CIF en cuentas';
$mod_strings['LBL_ACCOUNT_NIF_FIELD_DESC'] = 'Indica que campo de cuentas guarda el identificador fiscal del cliente';
$mod_strings['LBL_RESTART_NUMBERS'] = 'Reiniciar numeración';
$mod_strings['LBL_RESTART_NUMBERS_DESC'] = 'Indica si debe reiniciarse el contador de número de factura.';
$mod_strings['LBL_RESTART_CONTINUOUS'] = 'Continuo. Sin reinicio.';
$mod_strings['LBL_RESTART_YEARLY'] = 'Anual ( YYYY-N ) ';
$mod_strings['LBL_RESTART_DAILY'] = 'Diario ( YYYMMDD-N )';

$mod_strings['LBL_PATH_TO_LOGO'] = 'Ruta al logo';
$mod_strings['LBL_PATH_TO_LOGO_DESC'] = 'Ruta donde se guarda la imagen que se usará como logo en las facturas PDF.<br>(Por defecto "themes/Sugar/images/company_logo.png")';

$mod_strings['LBL_GENERAL_CONDITIONS'] = 'Condiciones generales';
$mod_strings['LBL_GENERAL_CONDITIONS_DESC'] = 'Permite indicar unas condiciones generales para todas las facturas';

$mod_strings['LBL_DEFAULT_TAX_TYPE'] = 'Tipo de impuesto por defecto';
$mod_strings['LBL_DEFAULT_TAX'] = 'Porcentaje de impuesto por defecto';
$mod_strings['LBL_DEFAULT_RETENTION'] = 'Porcentaje de retención por defecto';
