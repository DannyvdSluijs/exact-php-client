<?php

namespace Picqer\Financials\Exact;

/**
 * Class Employment.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmployments
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Employee Employee ID
 * @property string $EmployeeFullName Name of employee
 * @property int $EmployeeHID Numeric number of Employee
 * @property int $EmploymentNumber Employment number
 * @property string $EndDate End date of employment
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $ReasonEnd ID of employment ended
 * @property string $ReasonEndDescription Reason of end of employment
 * @property int $ReasonEndFlex Reason of ended flexible employment
 * @property string $ReasonEndFlexDescription Other reason for end of employment
 * @property string $StartDate Start date of employment
 * @property string $StartDateOrganization Start date of the employee in the organization. This field is used to count the years in service.Note: For PUT, this property will update the start date years in service for all employments of this employee
 */
class Employment extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'EmploymentNumber',
        'EndDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ReasonEnd',
        'ReasonEndDescription',
        'ReasonEndFlex',
        'ReasonEndFlexDescription',
        'StartDate',
        'StartDateOrganization',
    ];

    protected $url = 'payroll/Employments';
}
