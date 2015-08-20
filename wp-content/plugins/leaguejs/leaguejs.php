<?php
/**
 * Plugin Name: LeagueJS
 * Plugin URI: http://jps26.com
 * Description: Manage players and teams
 * Version: 1.0.0
 * Author: JP
 * Tested up to: 4.3
 *
 * Text Domain: leaguejs
 */

require_once('lib/create_post_type.php');
require_once('lib/league_register_taxonomy.php');


/**
 * Create players and teams
 */
add_action( 'init', 'league_post_types' );
function league_post_types() {
    create_post_type('player', 'Player', 'Players');
    create_post_type('team', 'Team', 'Teams');
    league_register_taxonomy('season', 'Season', 'Seasons');
    league_register_taxonomy('gender', 'Gender', 'Genders');
}

/**
 * Connect players and teams
 */
add_action( 'p2p_init', 'league_post_connections' );
function league_post_connections() {
    p2p_register_connection_type(array(
        'name' => 'players_to_teams',
        'from' => 'player',
        'to' => 'team',
        'cardinality' => 'many-to-many'
    ));
    p2p_register_connection_type(array(
        'name' => 'players_to_posts',
        'from' => 'player',
        'to' => 'post',
        'cardinality' => 'many-to-many'
    ));
}