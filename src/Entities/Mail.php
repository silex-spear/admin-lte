<?php

namespace Spear\AdminLTE\Entities;

interface Mail
{
    public function getAuthor();
    public function getDate();
    public function getSubject();
    public function getAvatar();
}
