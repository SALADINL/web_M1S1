<div id="chat" class="ui-widget-content">
	<div id="chat_toolbar" class="ui-widget-content">
		<span id="reduce" class="glyphicon glyphicon-resize-small"></span>
		<span id="maximize" class="glyphicon glyphicon-resize-full"></span>
		<span id="chat_toolbar_texte">Chat</span>
	</div>
	<div id="chats">
		<?php foreach ($context->chats as $chat) : ?>
			<?php if ($chat->emetteur != NULL && $chat->post != NULL) : ?>
				<?php if ($context->user->id != $chat->emetteur->id) : ?>
				<div class="chat_message">
					<a href="facebook.php?action=profil&id=<?=$chat->emetteur->id?>">
						<span class="chat_message_id">@<?= htmlspecialchars($chat->emetteur->identifiant) ?></span>
					</a>
					<span>[<?=htmlspecialchars($chat->post->date->format('H:i'))?>]</span>
					<br>
					<div class="chat_message_post">
						<p><?= htmlspecialchars($chat->post->texte) ?></p>
					</div>
				</div>
				<?php else : ?>
				<div class="chat_message_user">
					<div class="chat_message_user_container">
						<span class="chat_message_id_user"> Moi </span>
						<span>[<?=htmlspecialchars($chat->post->date->format('H:i'))?>]</span>
					</div>
					<div class="chat_message_post_user">
						<p><?= htmlspecialchars($chat->post->texte) ?></p>
					</div>
				</div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<input id="last_id" type="hidden" name="last_id" value="<?= htmlspecialchars($context->lastChatId) ?>">
	<input id="nb_notif" type="hidden" name="nb_notif" value="0">
	<div id="div_chat_form">
		<form id="chat_form" action="facebook.php?action=profil<?=$context->id?>" method="POST">
			<input id="texte_chat" type="text" name="send_chat" placeholder="Envoyer un chat"/>
			<button id="chat_submit" type="submit" class="btn btn-default btn-sm">
				<span class="glyphicon glyphicon-send"></span> Send
			</button>
		</form>
	</div>
</div>
