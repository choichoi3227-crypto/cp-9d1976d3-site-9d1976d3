<?php
/**
 * WordPress 기본 설정 파일
 * CloudPress 자동 생성 — 직접 수정하지 마세요
 * 데이터베이스: SQLite (_db/wordpress.db — GitHub 레포 저장)
 */

// ── SQLite 데이터베이스 설정 ──────────────────────────────────────────────────
// D1(Cloudflare) 대신 GitHub 레포 내 SQLite .db 파일 사용
// db.php 드롭인(wp-content/db.php)이 SQLite 연결을 처리합니다.
define( 'DB_NAME',     '9d1976d3-58c0-402a-a50b-ef58d1387986_wp' );
define( 'DB_USER',     'cloudpress' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );

// ── SQLite 플러그인 설정 ──────────────────────────────────────────────────────
// wp-content/db.php (SQLite Database Integration 드롭인)
define( 'SQLITE_DB_DIR',  ABSPATH . '_db/' );   // GitHub 레포 내 _db/ 폴더
define( 'SQLITE_DB_FILE', 'wordpress.db' );      // .db 확장자 (D1 금지)

// ── 인증 키 & 솔트 ──────────────────────────────────────────────────────────
define( 'AUTH_KEY',         '1bc2bm1in12bm60618y0tiehi3fadyl5ampv3jzmfky6rzmqomvrbe21uw9yn30d' );
define( 'SECURE_AUTH_KEY',  '289wuiz2xnjfm5hvk3c5ax9sw7vvsgtu0zazxjr11k8uy6sv7w0xanmhhdv74j3b' );
define( 'LOGGED_IN_KEY',    'kn9r1f1195jzehpzhoy718fa4t5sa959quirrok1qk63oz7awxlq25pgehzcnogu' );
define( 'NONCE_KEY',        'p7wzwelm9ka0jfnnlcdjf9nl6bq6i5u6nxer71x9r8e6t6ymrxaom7m6qk73yeou' );
define( 'AUTH_SALT',        'g7w3igbwuam6b35mikq3bjx067hsz810b98igok1uc0yc6xxylmq1rz40xp4if14' );
define( 'SECURE_AUTH_SALT', 'ifbg3x7elprs830jzbq96797nx3y5uq958yidx4c7t7wvbvkmawpkm81xioh6ono' );
define( 'LOGGED_IN_SALT',   'sejv1vwe6ofjef36f85cf5dkmk3ct2i56fcg2cso71gpnp5jgnmwrzvbwo4vu5pd' );
define( 'NONCE_SALT',       'ecbr55ky77fdq6p949cw1xd0pb9pww0s7w3410c2qgbozh2mbwhj4ck6w1tw3mzs' );

// ── CloudPress 전용 설정 ─────────────────────────────────────────────────────
define( 'CP_SITE_ID', getenv('CP_SITE_ID') ?: '9d1976d3-58c0-402a-a50b-ef58d1387986' );
define( 'CP_GITHUB_OWNER',  getenv('CP_GITHUB_OWNER')  ?: '' );
define( 'CP_GITHUB_REPO',   getenv('CP_GITHUB_REPO')   ?: '' );
define( 'CP_GITHUB_TOKEN',  getenv('CP_GITHUB_TOKEN')  ?: '' );

// ── 테이블 접두사 ────────────────────────────────────────────────────────────
$table_prefix = 'wp_';

// ── 절대 경로 ───────────────────────────────────────────────────────────────
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// ── 디버그 설정 ─────────────────────────────────────────────────────────────
define( 'WP_DEBUG',         false );
define( 'WP_DEBUG_LOG',     false );
define( 'WP_DEBUG_DISPLAY', false );

// ── 보안 설정 ───────────────────────────────────────────────────────────────
define( 'DISALLOW_FILE_EDIT', true );

// ── 업로드 경로 ──────────────────────────────────────────────────────────────
define( 'UPLOADS', 'wp-content/uploads' );

// ── WordPress 설정 로드 ──────────────────────────────────────────────────────
require_once ABSPATH . 'wp-settings.php';
