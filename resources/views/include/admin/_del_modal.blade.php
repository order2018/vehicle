
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal-{{ empty($mid) ? '0': $mid }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    {{ empty($title) ? '无标题': $title }}
                </h4>
            </div>
            <div class="modal-body">
                {{ empty($content) ? '你真的要删除吗？': $content }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary" onclick="goPath('{{ empty($url) ? route('index'): $url }}')">确定</button>
            </div>
        </div>
    </div>
</div>