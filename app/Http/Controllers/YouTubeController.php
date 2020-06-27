<?php

namespace App\Http\Controllers;

use Google_Exception;
use Google_Service_Exception;

class YouTubeController extends Controller
{
    /**
     * YouTubeAPIを実行し、データを取得する
     * @throws Google_Exception
     */
    public function analyzeYouTube()
    {
        try
        {
            $aDeveloperKey = env('YOUTUBE_API_KEY');
            $aGoogleClient = new \Google_Client();
            $aGoogleClient->setDeveloperKey( $aDeveloperKey );

            $aYouTubeService = new \Google_Service_YouTube( $aGoogleClient );

            $aSearchWord = 'niziU';
            $aMaxResult = 100;
            $aOrder = 'viewCount';

            // API実行
            $aSearchResponse = $aYouTubeService->search->listSearch('id,snippet', array(
                'q' => $aSearchWord,
                'maxResults' => $aMaxResult,
                'order' => $aOrder,
            ));

            $aVideoIds = array();
            foreach ( $aSearchResponse ->items as $item )
            {
                $aVideoId = $item->id->videoId;
                if ( !$aVideoId )
                {
                    continue;
                }

                $aVideoIds[] = $aVideoId;
            }

            foreach ( $aVideoIds as $aVideoId )
            {
                $aVideoResponse = $aYouTubeService->videos->listVideos('snippet', array(
                    'id' => $aVideoId,
                ));
                return response()->json($aVideoResponse);
            }

        } catch (Google_Service_Exception $e) {
            throw $e;
        } catch (Google_Exception $e) {
            throw $e;
        }

    }
}
