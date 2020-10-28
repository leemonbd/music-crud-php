<?php

?>

<div class="modal fade" id="addWorldMusicVideo">
    <div>
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 style="color: #001489">Add video Song</h5>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label style="color: #001489">Song Title</label>
                            <input type="text" name="songtitle" class="form-control">
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">Choose Video File</label>
                            <input type="file" name="videofile" accept="video/" class="btn btn-block "  style="background-color: #001489; color:#F0F0F0">
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">Choose a background image file</label>
                            <input type="file" name="videoimage" accept="image/" class="btn btn-block " style="background-color: #001489; color:#F0F0F0">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="video-file-btn" class="btn btn-block " value="Save video file" style="background-color: #001489; color:#F0F0F0">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close" data-dismiss="modal" style="color:#001489">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="addWorldMusicAudio">
    <div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="color: #001489">Add Audio Song</h5>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label style="color: #001489">Song Title</label>
                            <input type="text" name="songtitle" class="form-control" >

                        </div>

                        <div class="form-group">
                            <label style="color: #001489">Artist Name</label>
                            <input type="text" name="songartist" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label style="color: #001489">Choose an audio file </label>
                            <input type="file" name="audiofile" accept="audio/*" class="btn btn-block " style="background-color: #001489; color:#F0F0F0" >
                        </div>
                        <div class="form-group">
                            <input type="submit" name="audio-file-btn" class="btn btn-block " value="Save Audio file" style="background-color: #001489; color:#F0F0F0">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close" data-dismiss="modal" style="color:#001489">Close</button>

                </div>

            </div>
        </div>
    </div>
</div>

