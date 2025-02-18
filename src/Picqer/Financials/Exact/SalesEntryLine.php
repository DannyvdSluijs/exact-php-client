<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesEntryLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesEntrySalesEntryLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company. For almost all lines this can be calculated like: AmountDC = AmountFC * RateFC.
 * @property float $AmountFC For normal lines it's the amount excluding VAT
 * @property string $Asset Reference to Asset
 * @property string $AssetDescription Description of Asset
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to Cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $CustomField Custom field endpoint
 * @property string $Description Description. Can be different for header and lines
 * @property int $Division Division code
 * @property string $EntryID The unique ID of the entry. Via this ID all transaction lines of a single entry can be retrieved
 * @property float $ExtraDutyAmountFC Extra duty amount in the currency of the transaction. Both extra duty amount and VAT amount need to be specified in order to differ this property from automatically calculated.
 * @property float $ExtraDutyPercentage Extra duty percentage for the item
 * @property string $From From date to identify the range for accrued/deferred revenue. This is used in combination with the property 'To' that defines the end date
 * @property string $GLAccount The GL Account of the invoice line. This field is generated based on the revenue account of the item (or the related item group). G/L Account is also used to determine whether the costcenter / costunit is mandatory
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $IntraStatArea IntraStat area (only relevant when IntraStat for sales is enabled in the administration)
 * @property string $IntraStatCountry IntraStatCountry (only relevant when IntraStat for sales is enabled in the administration)
 * @property string $IntraStatDeliveryTerm IntraStat delivery term (only relevant when IntraStat for sales is enabled in the administration)
 * @property string $IntraStatTransactionA IntraStat transaction A (only relevant when IntraStat for sales is enabled in the administration)
 * @property string $IntraStatTransactionB IntraStat transaction B (only relevant when IntraStat for sales is enabled in the Belgium, Luxembourg, France & United Kingdom administration)
 * @property string $IntraStatTransportMethod IntraStat transport method (only relevant when IntraStat for sales is enabled in the administration)
 * @property int $LineNumber Indicates the sequence of the lines within one entry
 * @property string $Notes Extra notes
 * @property string $Project The project to which the sales transaction line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property string $SerialNumber Serial number
 * @property float $StatisticalNetWeight Statistical NetWeight (only relevant when IntraStat for sales is enabled in the administration)
 * @property string $StatisticalNumber Statistical Number (only relevant when IntraStat for sales is enabled in the administration)
 * @property float $StatisticalQuantity Statistical Quantity (only relevant when IntraStat for sales is enabled in the administration)
 * @property float $StatisticalValue Statistical Value (only relevant when IntraStat for sales is enabled in the administration)
 * @property string $Subscription When generating invoices from subscriptions, this field records the link between invoice lines and subscription lines
 * @property string $SubscriptionDescription Description of Subscription
 * @property string $To To date to identify the range for accrued/deferred revenue. This is used in combination with the property 'From' that defines the start date
 * @property string $TrackingNumber Reference to TrackingNumber
 * @property string $TrackingNumberDescription Description of TrackingNumber
 * @property int $Type Type: 20 = Sales entry, 21 = Sales credit note
 * @property float $VATAmountDC VAT amount in the default currency of the company
 * @property float $VATAmountFC VAT amount in the currency of the transaction. Use this property to specify a VAT amount that differs from the VAT amount that is automatically calculated. However if the transaction uses extra duty, extra duty amount also needs to be specified.
 * @property float $VATBaseAmountDC The VAT base amount in the default currency of the company. This is calculated based on the VATBaseAmountFC
 * @property float $VATBaseAmountFC The VAT base amount in invoice currency. This is calculated with the use of VAT codes. It's an internal value
 * @property string $VATCode The VAT code used when the invoice was registered. If this property is not filled, it will use the default VAT code of the G/L account property
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage The VAT percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used by the default calculation of VAT amounts and VAT base amounts
 */
class SalesEntryLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFC',
        'Asset',
        'AssetDescription',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'CustomField',
        'Description',
        'Division',
        'EntryID',
        'ExtraDutyAmountFC',
        'ExtraDutyPercentage',
        'From',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'IntraStatArea',
        'IntraStatCountry',
        'IntraStatDeliveryTerm',
        'IntraStatTransactionA',
        'IntraStatTransactionB',
        'IntraStatTransportMethod',
        'LineNumber',
        'Notes',
        'Project',
        'ProjectDescription',
        'Quantity',
        'SerialNumber',
        'StatisticalNetWeight',
        'StatisticalNumber',
        'StatisticalQuantity',
        'StatisticalValue',
        'Subscription',
        'SubscriptionDescription',
        'To',
        'TrackingNumber',
        'TrackingNumberDescription',
        'Type',
        'VATAmountDC',
        'VATAmountFC',
        'VATBaseAmountDC',
        'VATBaseAmountFC',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
    ];

    protected $url = 'salesentry/SalesEntryLines';
}
