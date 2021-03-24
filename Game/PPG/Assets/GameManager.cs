using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameManager : MonoBehaviour
{
    public int selectedCarId;
    public int selectedMapId;
    public void SelectCar(int carId) =>
        selectedCarId = carId;

    public void SelectMap(int mapId) =>
        selectedMapId = mapId;

    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        Debug.Log(selectedCarId);
        Debug.Log(selectedMapId);
    }
}
