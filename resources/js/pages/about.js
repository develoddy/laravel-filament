const videoPlayer = document.getElementById('videoPlayer');
const toggleSoundButton = document.getElementById('toggleSound');

if (videoPlayer && toggleSoundButton) {
    toggleSoundButton.addEventListener('click', () => {
        videoPlayer.muted = !videoPlayer.muted;

        toggleSoundButton.textContent = videoPlayer.muted
            ? '🔊 Activar sonido'
            : '🔇 Silenciar';
    });
}