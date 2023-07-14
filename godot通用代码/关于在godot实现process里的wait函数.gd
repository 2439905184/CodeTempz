func wait(sec):
	var frame = sec * Engine.get_iterations_per_second()
	if Engine.get_idle_frames() % int(frame) == 0:
		return true
	else:
		return false