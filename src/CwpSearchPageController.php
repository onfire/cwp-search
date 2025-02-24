<?php

namespace CWP\Search;

use PageController;
use SilverStripe\Control\HTTPRequest;

/**
 * Description of SearchPageController
 *
 * @author dmooyman
 */
class CwpSearchPageController extends PageController
{
    /**
     * Create the dummy search record for this page
     *
     * @return CwpSearchPage
     */
    protected function generateSearchRecord()
    {
        $searchPage = CwpSearchPage::create();
        $searchPage->URLSegment = 'search';
        $searchPage->Title = _t('SilverStripe\\CMS\\Search\\SearchForm.SearchResults', 'Search Results');
        $searchPage->ID = -1;
        return $searchPage;
    }

    public function __construct($dataRecord = null)
    {
        if (!$dataRecord) {
            $dataRecord = $this->generateSearchRecord();
        }
        parent::__construct($dataRecord);
    }
    
    /**
     * @param HTTPRequest $request
     * @return \SilverStripe\Control\HTTPResponse
     */
    public function index(HTTPRequest $request)
    {
        return $this->redirect($this->Link('SearchForm'));
    }
}
