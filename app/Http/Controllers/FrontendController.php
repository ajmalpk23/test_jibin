<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Models\InterestesModel;
use App\Models\portfolioCatModel;
use App\Models\PortfolioModel;
use App\Models\ResumeModel;
use App\Models\ServiceModel;
use App\Models\SkillsModel;
use App\Models\TestimModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function Home()
    {
        $aboutData = AboutModel::where('status', 1)->get();
        $interestData = InterestesModel::where('status', 1)->get();
        $skillData = SkillsModel::where('status', 1)->get();
        $testimonData = TestimModel::where('status', 1)->get();
        $resumeEducationData = ResumeModel::where('status', 1)->where('resume_type', 1)->orderBy('priority', 'DESC')->get();
        $resumeProfessionData = ResumeModel::where('status', 1)->where('resume_type', 2)->orderBy('priority', 'DESC')->get();
        $servicesData = ServiceModel::where('status', 1)->get();
        $portfolioCatData = portfolioCatModel::where('status', 1)->get();

        // $portfolioData = PortfolioModel::where('status', 1)->whereHas('portfolioCategory', function (Builder $query) {
        //     $query->where('status',1);
        // })->get();
        $portfolioData = PortfolioModel::with(['portfolioCategory' => function ($q) {
            $q->where('status', 1);
        }])->where('status', 1)->get();
        // dd($portfolioData);

        return view('web.index')->with('aboutData', $aboutData)->with('interestData', $interestData)->with('skillData', $skillData)
            ->with('testimonData', $testimonData)->with('resumeEducationData', $resumeEducationData)->with('resumeProfessionData', $resumeProfessionData)
            ->with('servicesData', $servicesData)->with('portfolioCatData', $portfolioCatData)->with('portfolioData', $portfolioData);
    }

    public function portfolioDetails($id)
    {
        $portfolioDetailsData = PortfolioModel::with(['portfolioCategory' => function ($q) {
            $q->where('status', 1);
        }])->where('status', 1)->where('portfolio_id', $id)->get();
        return view('web.portfolio_details')->with('portfolioDetaislData', $portfolioDetailsData);
    }
}
