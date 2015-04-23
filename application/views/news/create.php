<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Create a New</h2>
                    <hr>
                    <form>
                        <label for="title">Title</label>
                        <input type="input" name="title" /><br />
                    
                        <label for="text">Text</label>
                        <textarea name="text"></textarea><br />
                    
                        <input type="submit" name="submit" value="Create news item" />
                    </form>
                    <hr class="visible-xs">
                    <p><a href="/news/">Back</a></p>
                </div>
            </div>
        </div>
