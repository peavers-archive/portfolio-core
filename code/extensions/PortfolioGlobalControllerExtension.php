<?

class PortfolioGlobalControllerExtension extends DataExtension
{

    /**
     * Get enterprise based projects
     *
     * @return mixed
     */
    public function getEnterprise()
    {
        return PortfolioEnterprise::get()->sort(array("Created" => "DESC"));
    }

    /**
     * Get community based projects
     *
     * @return mixed
     */
    public function getCommunity()
    {
        return PortfolioCommunity::get()->sort(array("Created" => "DESC"));
    }

}