<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncDocument.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncDocumentsDocuments
 *
 * @property int $Timestamp Timestamp
 * @property string $Account ID of the related account of this document
 * @property string $AccountCode Code of Account
 * @property string $AccountName Name of Account
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Body Body of this document
 * @property string $Category ID of the category of this document
 * @property string $CategoryDescription Description of Category
 * @property string $Contact ID of the related contact of this document
 * @property string $ContactFullName Contact full name
 * @property string $ContractID The contract linked to the document
 * @property string $ContractNumber Contract Number
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency code
 * @property int $Division Division code
 * @property string $DocumentDate Entry date of the incoming document
 * @property string $DocumentFolder The Id of document folder
 * @property string $DocumentFolderCode The Code of document folder
 * @property string $DocumentFolderDescription The Decsription of document folder
 * @property string $DocumentViewUrl Url to view the document
 * @property string $ExpiryDate Expiry date of this document
 * @property string $FinancialTransactionEntryID Reference to the transaction lines of the financial entry. For a document of type sales invoice it will return the InvoiceID of the sales invoice (SalesInvoices API).
 * @property bool $HasEmptyBody Indicates that the document body is empty
 * @property int $HID Human-readable ID, formatted as xx.xxx.xxx. Unique. May not be equal to zero
 * @property string $ID Primary key
 * @property bool $InheritShare InheritShare value
 * @property string $Item The item linked to the document
 * @property string $ItemCode Code of Item
 * @property string $ItemDescription Description of Item
 * @property string $ItemMaterial ID of bill of material materials
 * @property string $ItemRoutingStep ID of bill of material routings
 * @property string $Language The language code of the document
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Opportunity The opportunity linked to the document
 * @property string $Project The project linked to the document
 * @property string $ProjectCode Code of project
 * @property string $ProjectDescription Description of project
 * @property int $ProposedEntryStatus ProposedEntryStatus, 0 = Void, 5 = Rejected, 20 = Open, 50 = Processed
 * @property int $SalesInvoiceNumber 'Our reference' of the transaction that belongs to this document
 * @property int $SalesOrderNumber Number of the sales order
 * @property int $ScanServiceStatus ScanServiceStatus
 * @property int $SendMethod Send method
 * @property int $ShopOrderNumber Number of the shop order
 * @property string $Subject Subject of this document
 * @property string $TeamsMeetingId Teams meeting id
 * @property int $Type ID of the type of this document
 * @property string $TypeDescription Description of Type
 */
class SyncDocument extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Account',
        'AccountCode',
        'AccountName',
        'AmountFC',
        'Body',
        'Category',
        'CategoryDescription',
        'Contact',
        'ContactFullName',
        'ContractID',
        'ContractNumber',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Division',
        'DocumentDate',
        'DocumentFolder',
        'DocumentFolderCode',
        'DocumentFolderDescription',
        'DocumentViewUrl',
        'ExpiryDate',
        'FinancialTransactionEntryID',
        'HasEmptyBody',
        'HID',
        'ID',
        'InheritShare',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemMaterial',
        'ItemRoutingStep',
        'Language',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Opportunity',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'ProposedEntryStatus',
        'SalesInvoiceNumber',
        'SalesOrderNumber',
        'ScanServiceStatus',
        'SendMethod',
        'ShopOrderNumber',
        'Subject',
        'TeamsMeetingId',
        'Type',
        'TypeDescription',
    ];

    protected $url = 'sync/Documents/Documents';
}
