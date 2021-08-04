use SRE\Engine\CustomEngine;
use SRE\Engine\ReportOptions;
require_once "../sre_bootstrap.php";
$report = new ReportOptions(SRE_PUBLIC_REPORT);
$report->select_tables(array("items"))
       ->select_fields(array("id", "country", "date", "units_in_stock","product_name"))
       ->set_grouping(array("country"))
       ->set_layout("block")
       ->filter_like("items", "country", "usa")
       ->filter_between("items", "units_in_stock", 0, 15,SRE_NUMBER)
       ->filter_more("items", "date", "2018-01-01",SRE_TEXT);
$engine = new CustomEngine($report);
$report_path = $engine->create_report();
if ($report_path) {
    echo "Report created successfully! To visit your report please <a href='" . $report_path . "' /> click here </a> ";
}