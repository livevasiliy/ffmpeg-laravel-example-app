<?php

namespace App\Http\Controllers;

use Exception;
use FFMpeg\Coordinate\Dimension;
use FFMpeg\Format\Video\WebM;
use FFMpeg\Format\Video\X264;
use Illuminate\Http\Request;
use FFMpeg\Filters\Video\VideoFilters;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class UploadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function __invoke(Request $request)
    {
        try {
            $uploadedFile = $request->file('file');

            $path = sprintf('converted_%s', $uploadedFile->getClientOriginalName());

            FFMpeg::open($uploadedFile)
                ->addFilter(function (VideoFilters $filters) {
                    $filters->resize(new Dimension(320, 280));
                })
                ->export()
                ->toDisk('public')
                ->inFormat(new X264())
                ->save($path);

            return back()->with('path', Storage::url(sprintf('%s', $path)));
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
