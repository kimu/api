<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Api;

class Keywords
    extends AbstractApi
{
    /**
     * Get the basic information for a specific keyword id.
     *
     * @param array $options
     * @return mixed
     */
    public function getKeywords(array $options = array())
    {
        return $this->get('keyword/list', $options);
    }

    /**
     * Get the list of movies for a particular keyword by id.
     *
     * @param $keyword_id
     * @param array $options
     * @return mixed
     */
    public function getMovies($keyword_id, array $options = array())
    {
        return $this->get('keyword/' . $keyword_id . '/movies', $options);
    }
}