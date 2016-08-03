<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="matches")
*/
class Matches
{
    /**
     * @ORM\Column(type="bigint")
     * @ORM\Id
     */
    private $match_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $map_id;
    /**
     * @ORM\Column(type="bigint")
     */
    private $match_duration;
    /**
     * @ORM\Column(type="string")
     */
    private $match_mode;
    /**
     * @ORM\Column(type="string")
     */
    private $match_type;
    /**
     * @ORM\Column(type="string")
     */
    private $match_version;
    /**
     * @ORM\Column(type="string")
     */
    private $queue_type;
    /**
     * @ORM\Column(type="string")
     */
    private $region;
    /**
     * @ORM\Column(type="string")
     */
    private $season;
    /**
     * @ORM\Column(type="integer")
     */
    private $team_win;
    /**
     * @ORM\Column(type="bigint")
     */
    private $player_1_sid;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_1_champ;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_1_team_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_2_sid;
    /**
     * @ORM\Column(type="bigint")
     */
    private $player_2_champ;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_2_team_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_3_sid;
    /**
     * @ORM\Column(type="bigint")
     */
    private $player_3_champ;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_3_team_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_4_sid;
    /**
     * @ORM\Column(type="bigint")
     */
    private $player_4_champ;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_4_team_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_5_sid;
    /**
     * @ORM\Column(type="bigint")
     */
    private $player_5_champ;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_5_team_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_6_sid;
    /**
     * @ORM\Column(type="bigint")
     */
    private $player_6_champ;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_6_team_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_7_sid;
    /**
     * @ORM\Column(type="bigint")
     */
    private $player_7_champ;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_7_team_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_8_sid;
    /**
     * @ORM\Column(type="bigint")
     */
    private $player_8_champ;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_8_team_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_9_sid;
    /**
     * @ORM\Column(type="bigint")
     */
    private $player_9_champ;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_9_team_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_10_sid;
    /**
     * @ORM\Column(type="bigint")
     */
    private $player_10_champ;
    /**
     * @ORM\Column(type="integer")
     */
    private $player_10_team_id;
    /**
     * @return mixed
     */
    public function getMatchId()
    {
        return $this->match_id;
    }

    /**
     * @param mixed $match_id
     */
    public function setMatchId($match_id)
    {
        $this->match_id = $match_id;
    }

    /**
     * @return mixed
     */
    public function getMapId()
    {
        return $this->map_id;
    }

    /**
     * @param mixed $map_id
     */
    public function setMapId($map_id)
    {
        $this->map_id = $map_id;
    }

    /**
     * @return mixed
     */
    public function getMatchDuration()
    {
        return $this->match_duration;
    }

    /**
     * @param mixed $match_duration
     */
    public function setMatchDuration($match_duration)
    {
        $this->match_duration = $match_duration;
    }

    /**
     * @return mixed
     */
    public function getMatchMode()
    {
        return $this->match_mode;
    }

    /**
     * @param mixed $match_mode
     */
    public function setMatchMode($match_mode)
    {
        $this->match_mode = $match_mode;
    }

    /**
     * @return mixed
     */
    public function getMatchType()
    {
        return $this->match_type;
    }

    /**
     * @param mixed $match_type
     */
    public function setMatchType($match_type)
    {
        $this->match_type = $match_type;
    }

    /**
     * @return mixed
     */
    public function getMatchVersion()
    {
        return $this->match_version;
    }

    /**
     * @param mixed $match_version
     */
    public function setMatchVersion($match_version)
    {
        $this->match_version = $match_version;
    }

    /**
     * @return mixed
     */
    public function getQueueType()
    {
        return $this->queue_type;
    }

    /**
     * @param mixed $queue_type
     */
    public function setQueueType($queue_type)
    {
        $this->queue_type = $queue_type;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param mixed $season
     */
    public function setSeason($season)
    {
        $this->season = $season;
    }

    /**
     * @return mixed
     */
    public function getTeamWin()
    {
        return $this->team_win;
    }

    /**
     * @param mixed $team_win
     */
    public function setTeamWin($team_win)
    {
        $this->team_win = $team_win;
    }

    /**
     * @return mixed
     */
    public function getPlayer1Sid()
    {
        return $this->player_1_sid;
    }

    /**
     * @param mixed $player_1_sid
     */
    public function setPlayer1Sid($player_1_sid)
    {
        $this->player_1_sid = $player_1_sid;
    }

    /**
     * @return mixed
     */
    public function getPlayer1Champ()
    {
        return $this->player_1_champ;
    }

    /**
     * @param mixed $player_1_champ
     */
    public function setPlayer1Champ($player_1_champ)
    {
        $this->player_1_champ = $player_1_champ;
    }

    /**
     * @return mixed
     */
    public function getPlayer1TeamId()
    {
        return $this->player_1_team_id;
    }

    /**
     * @param mixed $player_1_team_id
     */
    public function setPlayer1TeamId($player_1_team_id)
    {
        $this->player_1_team_id = $player_1_team_id;
    }

    /**
     * @return mixed
     */
    public function getPlayer2Sid()
    {
        return $this->player_2_sid;
    }

    /**
     * @param mixed $player_2_sid
     */
    public function setPlayer2Sid($player_2_sid)
    {
        $this->player_2_sid = $player_2_sid;
    }

    /**
     * @return mixed
     */
    public function getPlayer2Champ()
    {
        return $this->player_2_champ;
    }

    /**
     * @param mixed $player_2_champ
     */
    public function setPlayer2Champ($player_2_champ)
    {
        $this->player_2_champ = $player_2_champ;
    }

    /**
     * @return mixed
     */
    public function getPlayer2TeamId()
    {
        return $this->player_2_team_id;
    }

    /**
     * @param mixed $player_2_team_id
     */
    public function setPlayer2TeamId($player_2_team_id)
    {
        $this->player_2_team_id = $player_2_team_id;
    }

    /**
     * @return mixed
     */
    public function getPlayer3Sid()
    {
        return $this->player_3_sid;
    }

    /**
     * @param mixed $player_3_sid
     */
    public function setPlayer3Sid($player_3_sid)
    {
        $this->player_3_sid = $player_3_sid;
    }

    /**
     * @return mixed
     */
    public function getPlayer3Champ()
    {
        return $this->player_3_champ;
    }

    /**
     * @param mixed $player_3_champ
     */
    public function setPlayer3Champ($player_3_champ)
    {
        $this->player_3_champ = $player_3_champ;
    }

    /**
     * @return mixed
     */
    public function getPlayer3TeamId()
    {
        return $this->player_3_team_id;
    }

    /**
     * @param mixed $player_3_team_id
     */
    public function setPlayer3TeamId($player_3_team_id)
    {
        $this->player_3_team_id = $player_3_team_id;
    }

    /**
     * @return mixed
     */
    public function getPlayer4Sid()
    {
        return $this->player_4_sid;
    }

    /**
     * @param mixed $player_4_sid
     */
    public function setPlayer4Sid($player_4_sid)
    {
        $this->player_4_sid = $player_4_sid;
    }

    /**
     * @return mixed
     */
    public function getPlayer4Champ()
    {
        return $this->player_4_champ;
    }

    /**
     * @param mixed $player_4_champ
     */
    public function setPlayer4Champ($player_4_champ)
    {
        $this->player_4_champ = $player_4_champ;
    }

    /**
     * @return mixed
     */
    public function getPlayer4TeamId()
    {
        return $this->player_4_team_id;
    }

    /**
     * @param mixed $player_4_team_id
     */
    public function setPlayer4TeamId($player_4_team_id)
    {
        $this->player_4_team_id = $player_4_team_id;
    }

    /**
     * @return mixed
     */
    public function getPlayer5Sid()
    {
        return $this->player_5_sid;
    }

    /**
     * @param mixed $player_5_sid
     */
    public function setPlayer5Sid($player_5_sid)
    {
        $this->player_5_sid = $player_5_sid;
    }

    /**
     * @return mixed
     */
    public function getPlayer5Champ()
    {
        return $this->player_5_champ;
    }

    /**
     * @param mixed $player_5_champ
     */
    public function setPlayer5Champ($player_5_champ)
    {
        $this->player_5_champ = $player_5_champ;
    }

    /**
     * @return mixed
     */
    public function getPlayer5TeamId()
    {
        return $this->player_5_team_id;
    }

    /**
     * @param mixed $player_5_team_id
     */
    public function setPlayer5TeamId($player_5_team_id)
    {
        $this->player_5_team_id = $player_5_team_id;
    }

    /**
     * @return mixed
     */
    public function getPlayer6Sid()
    {
        return $this->player_6_sid;
    }

    /**
     * @param mixed $player_6_sid
     */
    public function setPlayer6Sid($player_6_sid)
    {
        $this->player_6_sid = $player_6_sid;
    }

    /**
     * @return mixed
     */
    public function getPlayer6Champ()
    {
        return $this->player_6_champ;
    }

    /**
     * @param mixed $player_6_champ
     */
    public function setPlayer6Champ($player_6_champ)
    {
        $this->player_6_champ = $player_6_champ;
    }

    /**
     * @return mixed
     */
    public function getPlayer6TeamId()
    {
        return $this->player_6_team_id;
    }

    /**
     * @param mixed $player_6_team_id
     */
    public function setPlayer6TeamId($player_6_team_id)
    {
        $this->player_6_team_id = $player_6_team_id;
    }

    /**
     * @return mixed
     */
    public function getPlayer7Sid()
    {
        return $this->player_7_sid;
    }

    /**
     * @param mixed $player_7_sid
     */
    public function setPlayer7Sid($player_7_sid)
    {
        $this->player_7_sid = $player_7_sid;
    }

    /**
     * @return mixed
     */
    public function getPlayer7Champ()
    {
        return $this->player_7_champ;
    }

    /**
     * @param mixed $player_7_champ
     */
    public function setPlayer7Champ($player_7_champ)
    {
        $this->player_7_champ = $player_7_champ;
    }

    /**
     * @return mixed
     */
    public function getPlayer7TeamId()
    {
        return $this->player_7_team_id;
    }

    /**
     * @param mixed $player_7_team_id
     */
    public function setPlayer7TeamId($player_7_team_id)
    {
        $this->player_7_team_id = $player_7_team_id;
    }

    /**
     * @return mixed
     */
    public function getPlayer8Sid()
    {
        return $this->player_8_sid;
    }

    /**
     * @param mixed $player_8_sid
     */
    public function setPlayer8Sid($player_8_sid)
    {
        $this->player_8_sid = $player_8_sid;
    }

    /**
     * @return mixed
     */
    public function getPlayer8Champ()
    {
        return $this->player_8_champ;
    }

    /**
     * @param mixed $player_8_champ
     */
    public function setPlayer8Champ($player_8_champ)
    {
        $this->player_8_champ = $player_8_champ;
    }

    /**
     * @return mixed
     */
    public function getPlayer8TeamId()
    {
        return $this->player_8_team_id;
    }

    /**
     * @param mixed $player_8_team_id
     */
    public function setPlayer8TeamId($player_8_team_id)
    {
        $this->player_8_team_id = $player_8_team_id;
    }

    /**
     * @return mixed
     */
    public function getPlayer9Sid()
    {
        return $this->player_9_sid;
    }

    /**
     * @param mixed $player_9_sid
     */
    public function setPlayer9Sid($player_9_sid)
    {
        $this->player_9_sid = $player_9_sid;
    }

    /**
     * @return mixed
     */
    public function getPlayer9Champ()
    {
        return $this->player_9_champ;
    }

    /**
     * @param mixed $player_9_champ
     */
    public function setPlayer9Champ($player_9_champ)
    {
        $this->player_9_champ = $player_9_champ;
    }

    /**
     * @return mixed
     */
    public function getPlayer9TeamId()
    {
        return $this->player_9_team_id;
    }

    /**
     * @param mixed $player_9_team_id
     */
    public function setPlayer9TeamId($player_9_team_id)
    {
        $this->player_9_team_id = $player_9_team_id;
    }

    /**
     * @return mixed
     */
    public function getPlayer10Sid()
    {
        return $this->player_10_sid;
    }

    /**
     * @param mixed $player_10_sid
     */
    public function setPlayer10Sid($player_10_sid)
    {
        $this->player_10_sid = $player_10_sid;
    }

    /**
     * @return mixed
     */
    public function getPlayer10Champ()
    {
        return $this->player_10_champ;
    }

    /**
     * @param mixed $player_10_champ
     */
    public function setPlayer10Champ($player_10_champ)
    {
        $this->player_10_champ = $player_10_champ;
    }

    /**
     * @return mixed
     */
    public function getPlayer10TeamId()
    {
        return $this->player_10_team_id;
    }

    /**
     * @param mixed $player_10_team_id
     */
    public function setPlayer10TeamId($player_10_team_id)
    {
        $this->player_10_team_id = $player_10_team_id;
    }
}
