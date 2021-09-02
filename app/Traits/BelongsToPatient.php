<?php

namespace App\Traits;


use App\Models\Patient;

trait BelongsToPatient
{
	public function patient()
	{
		return $this->belongsTo(Patient::class);
	}

	public function scopeFilterByPatient($query, $patient)
	{
		if ($patient)
			$query->where('patient_id', $patient);
	}
}
