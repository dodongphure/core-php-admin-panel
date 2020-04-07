<fieldset>

    <div class="form-group">
        <label for="text1">Text 1</label>
          <textarea name="text1" placeholder="Text 1" class="form-control" id="text1"><?php echo htmlspecialchars(($edit) ? $notification['text1'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>

    <div class="form-group">
        <label for="text2">Text 2</label>
          <textarea name="text2" placeholder="Text 2" class="form-control" id="text2"><?php echo htmlspecialchars(($edit) ? $notification['text2'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>

    <div class="form-group">
        <label for="text3">Text 3</label>
          <textarea name="text3" placeholder="Text 3" class="form-control" id="text3"><?php echo htmlspecialchars(($edit) ? $notification['text3'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>
